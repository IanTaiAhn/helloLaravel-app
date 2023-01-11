<?php

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return view('testView');
});

// Methods for debuggin
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

// Using imported App\Models\Listing we can use the function we created to get all the listings.
Route::get('/', function () {
    return view('listings', [
        'listings' => Listing::all()
    ]);
});

// Single Listing... Idk how this works honestly, but it gets it by listing id. black boxed.
// I know that the {listing} is a variable that needs to match everything eles to work.
Route::get('/listings/{listingT}', function (Listing $listingT) {
    return view('listing', [
        'listing' => $listingT
    ]);
});

// Hard coded listings data.
// Route::get('/list', function () {
//     return view('listings', [
        // 'heading' => 'Latest Listings', This 'heading' is a variable that we can use in the blade layouts.
//         'listings' => [
//             [
//                 'id' => 1,
//                 'title' => 'Listing One',
//                 'description' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit.
//                 Alias distinctio qui consequuntur dicta pariatur possimus.'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Listing Two',
//                 'description' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit.
//                 Alias distinctio qui consequuntur dicta pariatur possimus.'
//             ],
//         ]
//     ]);
// });