<?php

use Illuminate\Support\Facades\Route;


// Movies Routes
Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');

// People Routes
Route::get('/people', 'PeopleController@index')->name('people.index');
Route::get('/people/{people}', 'PeopleController@show')->name('people.show');

// paginating actors
Route::get('/people/page/{page}', 'PeopleController@index');
