<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Movie;
use App\User;
use App\Save;

class memberController extends Controller
{
    public function profileMember(){
        $users = User::where('role','member')->get();

        return view ('member.profileMember', ['profile' => $users]);
    }
    public function listMovies(){
        $movies = DB::table('movies')->paginate(3);

        return view ('guest.homeGuest', ['movies' => $movies]);
    }

    public function search(Request $request){
        $search = $request->search;
        $movies = DB::table('movies')
        ->where('title','like',"%".$search."%")
        ->orwhere('genre','like',"%".$search."%")
        ->paginate();

        return view ('guest.homeGuest', ['movies' => $movies]);
    }


    public function listMoviesMember(){
        $movie = DB::table('movies')->paginate(3);
        return view ('member.homeMember',['movie' => $movie]);
    }

    public function searchMovieMember(Request $request){
        $search = $request->search;
        $movie = DB::table('movies')
        ->where('title','like',"%".$search."%")
        ->orwhere('genre','like',"%".$search."%")
        ->paginate();

        return view ('member.homeMember', ['movie' => $movie]);
    }

    public function save(){
        return view ('member/savedMovies');
    }

    public function saveMovie($id){
        $movie = Movie::findOrFail($id);

        return redirect("/member");
    }


}
