<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Package;
use App\Models\UserPremium;
use Illuminate\Support\Carbon;

class WebhookController extends Controller
{
    public function handler(Request $request)
    {
        \Midtrans\Config::$isProduction = (bool) env('MIDTRANS_IS_PRODUCTION');
        \Midtrans\Config::$serverKey =  env('MIDTRANS_SERVEY_KEY');
        $notif = new \Midtrans\Notification();

        $transactionStatus = $notif->transaction_status;
        $orderId = $notif->order_id;
        $fraudStatus = $notif->fraud_status;

        $status = '';

        if ($transactionStatus == 'capture'){
            if ($fraudStatus == 'challenge'){
                $status = 'challenge';
            }
         else if ($fraudStatus == 'accept')
            {
                $status = 'success';
            }
            } 
        else if ($transactionStatus == 'settlement')
            {
            $status = 'success';
            }
         else if ($transactionStatus == 'cancel' ||
                $transactionStatus == 'deny' ||
                $transactionStatus == 'expire')
            {
            $status = 'failure';
            }
        else if ($transactionStatus == 'pending')
            {
            $status = 'pending';
             }

             $transaction = Transaction::where('transaction_code', $orderId)->first();
             $package = Package::find($transaction->package_id);

             if($status === 'success'){
                $userPremium = UserPremium::where([
                    'user_id' => $transaction->user_id])->first();

            if($userPremium)
            {
                // renewal subscription
                $endOfSubscription = $userPremium->end_of_subscription;
                $date = Carbon::createFromFormat('Y-m-d', $endOfSubscription);
                $newendOfSubscription = $date->addDays($package->max_days)->format('Y-m-d');

                $userPremium->update([
                    'package_id' => $transaction->package_id,
                    'end_of_subscription' => $newendOfSubscription
                ]);
            }
            else
            {
                //New Subscriber
                UserPremium::create([
                    'package_id' => $package->id,
                    'user_id' => $transaction->user_id,
                    'end_of_subscription' => now()->addDays($package->max_days)
                ]);
            }   
        }

        $transaction->update(['status' => $status]);
             return response()->json(null);
    }
}
