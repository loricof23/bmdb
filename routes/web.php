<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin','adminController@listMoviesAdmin');
Route::get('/admin/process','adminController@searchMovieAdmin');
Route::get('/','memberController@listMovies');
Route::get('/guest/process','memberController@search');

Route::get('/login','loginController@login')->name('login');
Route::post('/login/process','loginController@loginProcess');

Route::get('/register','loginController@register');
Route::post('/register/process','loginController@registerProcess');




Route::get('/inboxAdmin', function (){
    return view('admin/inboxAdmin');
});

Route::get('/profileAdmin', 'adminController@profile');
Route::get('/updateProfile/{id}','adminController@updateProfile');
Route::post('/updateProfile/{id}/process','adminController@updateProfileProcess');
//manage user
Route::get('/manageUser', 'adminController@manageUser');
Route::get('/addUser','adminController@addUser');
Route::post('/addUser/process','adminController@addUserProcess');
Route::get('/updateUser/{id}','adminController@updateUser');
Route::post('/updateUser/{id}/process','adminController@updateUserProcess');
Route::get('/deleteUser/{id}','adminController@deleteUser');

//manage movie
Route::get('/manageMovie', 'adminController@manageMovie');
Route::get('/addMovie','adminController@addMovie');
Route::post('/addMovie/process','adminController@addMovieProcess');
Route::get('/updateMovie/{id}','adminController@updateMovie');
Route::post('/updateMovie/{id}/process','adminController@updateMovieProcess');
Route::get('/deleteMovie/{id}','adminController@deleteMovie');

//manage genre
Route::get('/manageGenre', 'adminController@manageGenre');
Route::get('/addGenre','adminController@addGenre');
Route::post('/addGenre/process','adminController@addGenreProcess');
Route::get('/updateGenre/{id}','adminController@updateGenre');
Route::post('/updateGenre/{id}/process','adminController@updateGenreProcess');
Route::get('/deleteGenre/{id}','adminController@deleteGenre');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/profileMember', 'memberController@profileMember');

    Route::get('/member', 'memberController@listMoviesMember');
    Route::get('/member/process','memberController@searchMovieMember');

    Route::get('/save', 'memberController@save');
    Route::get('/saveMovie/{id}', 'memberController@saveMovie');

    Route::get('/inboxMember', function (){
        return view('member/inboxMember');
    });
});
