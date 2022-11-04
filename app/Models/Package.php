<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // $table->string('name');
    //         $table->float('price');
    //         $table->string('max_days');
    //         $table->string('max_user');
    //         $table->boolean('is_download');
    //         $table->boolean('is_4k');

    protected $table = 'packages';

    protected $fillable = [
        'name',
        'price',
        'max_days',
        'max_user',
        'is_download',
        'is_4k'
    ];
}
