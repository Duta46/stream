<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Arr;

class MovieController extends Controller
{
        //menampilkan data pada database
    public function index(){
        $movies = Movie::all();

        return view('admin.movies', ['movies' => $movies]);
    }

    public function create(){
        return view('admin.movie-create');
    }
    
    public function edit($id){
        return view('admin.movie-edit');
    }

    public function store(Request $request){

        $data = $request->except('_token');
        $request->validate([
            'title' => 'required|string',
            'small_thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'large_thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'trailer' => 'required|url',
            'movie' => 'required|url',
            'casts' => 'required|string',
            'categories' => 'required|string',
            'release_date' => 'required|string',
            'categories' => 'required|string',
            'about' => 'required|string',
            'short_about' => 'required|string',
            'duration' => 'required|string',
            'featured' => 'required',
        ]);

        $smallThumbnail = $request->small_thumbnail;
        $largeThumbnail = $request->large_thumbnail;

        $originalSmallThumbnailName =  Arr::random(10).$smallThumbnail->getClientOriginalName();
        $originalLargeThumbnailName = Arr::random(10).$largeThumbnail->getClientOriginalName();

        //upload file nama
        //upload file
        $smallThumbnail->storeAs('public/thumbnail', $originalSmallThumbnailName);
        $largeThumbnail->storeAs('public/thumbnail', $originalLargeThumbnailName);

        $data['small_thumbnail'] = $originalSmallThumbnailName;
        $data['large_thumbnail'] = $originalLargeThumbnailName;

        // echo "<pre>".print_r($data, 1)."</pre>";

        Movie::create($data); //menyimpan pada database

        return redirect()->route('admin.movie.create');
    }
}
