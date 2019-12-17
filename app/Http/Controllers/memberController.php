<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Movie;

class memberController extends Controller
{
    public function listMovies(){
        $movies = Movie::all();

        return view ('guest.homeGuest', ['listMovies' => $movies]);
    }

    public function search(Request $request){
        $search = $request->search;

        $movies = Movie::all()->where('title','like','%'.$search.'%');

        return view('guest.homeGuest', ['listMovies' => $movies]);
    }
}
