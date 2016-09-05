<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');

Route::get('notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('begin', function () {
    flash('You are logged in!', 'success');
    return redirect('/home');
});
