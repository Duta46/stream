<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'riviews';

    protected $fillable = [
        'user_id',
        'movie_id',
        'star',
        'riview'
    ];
}
