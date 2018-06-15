<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/notes', 'NotesController')->middleware('auth:api');


App::bind('App\Repositories\NotesInterface', 'App\Repositories\Notes');

//Route::get('/notes/{user_id}', 'NotesController@getAllUserNotes');
//Route::post('/notes', 'NotesController@createNotes');




Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
Route::group(['middleware' => 'auth:api'], function() {
    Route::post('notes/all', 'NotesController@index');
    Route::get('notes/{id}', 'NotesController@show');
    Route::post('notes', 'NotesController@store');
    Route::put('notes/{id}', 'NotesController@update');
    Route::delete('notes/{id}', 'NotesController@delete');
});