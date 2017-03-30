<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  // documentation goes here
});

Route::get('/players', function () {
  $myArray = [
    [
    'id' => 'UNC',
    'first' => 'Arkansas',
    'last' => 72,
    'gamesPlayed' => 65
    ],
    [
      'home' => 'Duke',
      'away' => 'South Carolina',
      'ptsHome' => 81,
      'ptsAway' => 89
    ]
  ];
  return Response::json($myArray);
});
