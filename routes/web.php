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

// Route::get('/', function () {
//     return view('frontend.index');
// });


Route::get('/', 'PostsController@getPosts');
Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::group(['middleware' => ['auth']], function () {
    	Route::get('/', 'HomeController@index')->name('home');
    	Route::resource('posts', 'PostsController');
    	Route::post('imageUpload','PostsController@uploadImagege');
	});
});
Route::get('{slug}', 'PostsController@getPost');