<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('member.auth');
    }

    public function auth(Request $request){
        $request ->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return 'Login Success';

            // return redirect()->route('member.dashboard');
        }
        return back()->withErrors([
            'credentials' => 'Akun yang anda masukkan salah, silahkan coba lagi'
        ])->withInput();
    }
}
