<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'package_id',
        'user_id',
        'amount',
        'transaction_code',
        'status'
    ];

    //eager loads : mengambil data dari tabel lain

    public function package(){
        return $this->belongsTo(Package::class); //foreign key dan primary key
    }

    public function user(){
        return $this->belongsTo(User::class); //foreign key dan primary key
    }
}
