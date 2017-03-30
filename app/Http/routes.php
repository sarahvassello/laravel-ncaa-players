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
use Illuminate\Http\Request;
// Games collection routes
Route::get('/games', 'GameController@index');
Route::post('/games', 'GameController@create');
// Games singular routes
Route::get('/games/{id}', 'GameController@show');
Route::put('/games/{id}', 'GameController@update');
Route::delete('/games/{id}', 'GameController@destroy');
// HTML/view responses
Route::get('/', function () {
  return view('home');
});
Route::get('/subview', function () {
  return view('subview');
});
Route::get('/styleguide', function () {
});

Route::get('/games{id}', 'GameController@players')
