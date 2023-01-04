<?php

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('testView');
});

// Useful for apis i think.. or not

Route::get('/posts/{id}', function ($id) {
    // die dump
    // dd($id); 
    // die dump debug
    // 1   ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

// We can get stuff from the url by typing this into the url
// /search?name=IanTai&City=SaltLakeCity
Route::get('/search', function (Request $request) {
    // dd($request) this will show a bunch of crap 

    // We do this to specify which "query" we want, or info we passed into the url.
    return $request->name . ' ' . $request->city;
});
