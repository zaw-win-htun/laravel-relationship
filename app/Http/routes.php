<?php

Route::resource('/articles','ArticlesController');


// Route::get('articles' , 'ArticlesController@index');

// Route::get('articles/create' , 'ArticlesController@create');

// Route::get('articles/{id}' , 'ArticlesController@show');

// Route::post('articles' , 'ArticlesController@store');

Route::auth();

Route::get('/home', 'HomeController@index');
