<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Movie;
use App\Genre;

class adminController extends Controller
{
    public function profile(){
        $users = User::all();

        return view ('admin.profileAdmin', ['profile' => $users]);
    }
    //user
    public function manageUser(){
        $users = User::all();

        return view ('admin.manageUser', ['manUser' => $users]);
    }

    public function addUser(){
        return view ('admin/addUser');
    }

    public function addUserProcess(Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'name' =>'required',
                'email' =>'required',
                'role' =>'required',
                'password' =>'required',
                'confpassword' =>'required',
                'sex' => 'required',
                'address' => 'required',
                'bday' =>'required',
                'file_upload'=>'required'
            ]);
            $users = new User;
            $users->name = $request->name;
            $users->email = $request->email;
            $users->role = $request->role;
            $users->password = bcrypt($request->password);
            $users->password = bcrypt($request->confpassword);
            $users->gender = $request->sex;
            $users->address = $request->address;
            $users->birthday = $request->bday;
            $users->photo = $request->file_upload;
            $users->save();
            return redirect('/manageUser')->with('success','add success');
        }else{
            return redirect('/addUser');
        }
    }

    public function updateUser($id){
        $user = User::findOrFail($id);
        return view ('admin.updateUser',['user' => $user]);
    }

    public function updateUserProcess($id,Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'name' =>'required',
                'email' =>'required',
                'role' =>'required',
                'password' =>'required',
                'confpassword' =>'required',
                'sex' => 'required',
                'address' => 'required',
                'bday' =>'required',
                'file_upload'=>'required'
            ]);

            try{
                $users = User::findOrFail($id);
                $users->name = $request->name;
                $users->email = $request->email;
                $users->role = $request->role;
                $users->password = bcrypt($request->password);
                $users->password = bcrypt($request->confpassword);
                $users->gender = $request->sex;
                $users->address = $request->address;
                $users->birthday = $request->bday;
                $users->photo = $request->file_upload;
                $users->save();
                return redirect('/manageUser')->with('success','Data Updated Successfully');
            }catch (Exception $e){
                dd($e);
            }
        }else{
            return redirect('/updateUser');
        }
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect("/manageUser");
    }


    //movie
    public function manageMovie(){
        $movies = Movie::all();

        return view ('admin.manageMovie', ['manMovie' => $movies]);
    }

    public function addMovie(){
        return view('admin/addMovie');
    }

    public function addMovieProcess(Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'title' =>'required',
                'genre' =>'required',
                'desc' => 'required',
                'rating' => 'required',
                'file_upload' => 'required'
            ]);

            $movies = new Movie;
            $movies->postBy = "Admin";
            $movies->title = $request->title;
            $movies->genre = $request->genre;
            $movies->description = $request->desc;
            $movies->rating = $request->rating;
            $movies->photo = $request->file_upload;

            $movies->save();
            return redirect('/manageMovie')->with('success','add success');
        }else{
            return redirect('/addMovie');
        }
    }

    public function updateMovie($id){
        $movie = Movie::findOrFail($id);
        return view('admin.updateMovie', ['movie' => $movie]);
    }

    public function updateMovieProcess($id,Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'title' =>'required',
                'genre' =>'required',
                'desc' => 'required',
                'rating' => 'required',
                'file_upload' => 'required'
            ]);

            try{
                $movies = Movie::findOrFail($id);
                $movies->postBy = "Admin";
                $movies->title = $request->title;
                $movies->genre = $request->genre;
                $movies->description = $request->desc;
                $movies->rating = $request->rating;
                $movies->photo = $request->file_upload;

                $movies->save();
                return redirect('/manageMovie')->with('success','Data Updated Successfully');
            }catch (Exception $e){
                dd($e);
            }
        }else{
            return redirect('/updateMovie');
        }
    }

    public function deleteMovie($id){
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/manageMovie');
    }
    //genre
    public function manageGenre(){
        $genres = Genre::all();

        return view ('admin.manageGenre', ['manGenre' => $genres]);
    }

    public function addGenre(){
        return view('admin/addGenre');
    }

    public function addGenreProcess(Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'genre' =>'required'
            ]);

            $genres = new Genre;
            $genres->genre = $request->genre;

            $genres->save();
            return redirect('/manageGenre')->with('success','add success');
        }else{
            return redirect('/addGenre');
        }
    }

    public function updateGenre($id){
        $genre = Genre::findOrFail($id);
        return view('admin.updateGenre', ['genre' => $genre]);
    }

    public function updateGenreProcess($id,Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'genre' =>'required'
            ]);
            try{
                $genres = Genre::findOrFail($id);
                $genres->genre = $request->genre;

                $genres->save();
                return redirect('/manageGenre')->with('success','Data Updated Successfully');
            }catch(Exception $e){
                dd($e);
            }
        }else{
            return redirect('/updateGenre');
        }
    }

    public function deleteGenre($id){
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect("/manageGenre");
    }

    public function listMoviesAdmin(){
        $movie = Movie::all();
        return view ('admin.homeAdmin',['listMovies' => $movie]);
    }
}
