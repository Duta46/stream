<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id){
        return view('member.movie-detail');
    }

    public function watch($id){
        return view('member.movie-watching');
    }
}
