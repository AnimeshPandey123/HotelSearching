<?php

use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::get('/users/admin/{id}', 'UserController@admin')->name('user.admin');
	Route::get('/users/notadmin/{id}', 'UserController@notadmin')->name('user.not.admin');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/hotels/edit/{id}', 'HotelsController@edit')->name('hotels.edit');
	Route::post('/hotels/update/{id}', 'HotelsController@update')->name('hotel.update');
	Route::get('/hotels/users', 'UserController@index')->name('user.index');
	Route::get('/hotels/users/delete', 'UserController@delete')->name('user.delete');
	Route::get('/hotels/show', 'HotelsController@show')->name('hotels.show')->middleware('auth');
	Route::get('/hotels/create', 'HotelsController@create')->name('hotels.create');
	Route::get('/hotels/delete/{id}', 'HotelsController@destroy')->name('hotels.delete');
});

Route::post('/hotels/search', 'HotelsController@search')->name('hotels.search');
Route::get('/hotels/room/{id}', 'HotelsController@room')->name('hotel.room');
Route::post('/hotels/room/store/{id}', 'HotelsController@roomstore')->name('hotel.room.store');
Route::get('/hotels/room/ok/{id}', 'HotelsController@ok')->name('hotel.room.ok');
Route::post('/hotels/store', 'HotelsController@store')->name('hotels.store');

Route::post('/hotels/book/{hotelid}/{userid}', 'UserController@book')->name('hotels.book')->middleware('auth');
Route::get('/hotels/newbook/{hotelid}', 'UserController@newbook')->name('hotels.new.book')->middleware('auth');

Route::get('/', function () {

	return view('navigation.home');
})->name('navigation.home');
Route::get('/portfolio', function () {

	return view('navigation.section2');
})->name('navigation.sec2');
Route::get('/blog', function () {

	return view('navigation.blogentries');
})->name('navigation.blog');

Route::get('/contact', function () {

	return view('navigation.contactus');
})->name('navigation.contact');
