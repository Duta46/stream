<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPremium extends Model
{
    // $table->foreignId('package_id')->constrained('packages');
    // $table->foreignId('user_id')->constrained('users');
    // $table->date('end_of_subscription');
    use HasFactory;

    protected $table = 'user_premiums';

    protected $fillable = [
        'package_id',
        'user_id',
        'end_of_suscription'
    ];

}
