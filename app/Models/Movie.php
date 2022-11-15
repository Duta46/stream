<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    // $table->string('title');
    //         $table->string('trailer');
    //         $table->string('movie');
    //         $table->string('casts');
    //         $table->string('categories');
    //         $table->string('small_thumbnail');
    //         $table->string('large_thumbnail');
    //         $table->date('release_date');
    //         $table->text('about');
    //         $table->string('short_about');
    //         $table->boolean('featured');
            

    protected $table = 'movies';

    protected $fillable = [
        'title',
        'trailer',
        'movie',
        'casts',
        'categories',
        'small_thumbnail',
        'large_thumbnail',
        'release_date',
        'about',
        'short_about',
        'duration',
        'featured'
    ];
}
