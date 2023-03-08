<?php
use ReactMVC\App\Core\Routing\Route;
use ReactMVC\App\Middleware\Test;

Route::get('/', 'HomeController@index');

Route::get('/blog', function(){
    return null;
}, [Test::class]);

Route::get('/post/{id}', 'PostController@single');