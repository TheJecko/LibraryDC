<?php

Route::get('/','PostsController@index');
Route::get('/show/{post}','PostsController@show');
Route::get('/blog', 'PostsController@create');
Route::post('/blog', 'PostsController@store');

Route::get('/books', 'BooksController@index');
Route::get('/create', 'BooksController@create');
Route::post('/books', 'BooksController@store');
Route::get('/search', 'BooksController@show');

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
