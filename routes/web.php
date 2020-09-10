<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index')->name('index');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


Auth::routes();

Route::group([
    'prefix' => '/admin',
    'namespace' => 'Admin',
    'middleware' => ['auth']],
    function() {
        Route::get('/', 'PostController@index')->name('posts');
        Route::get('post', 'PostController@create')->name('post.create');
        Route::post('post', 'PostController@store')->name('post.store');
        Route::get('/edit/{post:slug}', 'PostController@edit')->name('post.edit');
        Route::post('/edit/{post:slug}', 'PostController@update')->name('post.update');
        Route::delete('/{post:slug}', 'PostController@destroy')->name('post.destroy');

        Route::get('comments', 'CommentController@index')->name('comments');
        Route::delete('/comments/{comment}', 'CommentController@destroy')->name('comment.destroy');
    });

Route::get('/{post:slug}', 'PostController@show')->name('front.show');