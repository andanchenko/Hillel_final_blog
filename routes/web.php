<?php
/** Posts */
Route::get('/post/create', 'PostController@create')->name('create_post');
Route::post('/post/create', 'PostController@store');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts', 'PostController@index')->name('show_posts');

Route::get('/post/{postId}', 'PostController@show')->name('show_post');
Route::delete('/post/{postId}', 'PostController@destroy')->name('delete_post');
Route::put('/post/{postId}', 'PostController@edit')->name('edit_post');
Route::post('/post/{postId}', 'PostController@update')->name('update_post');

/** Comments **/
Route::post('/comment/add','CommentController@store')->name('create_comment');
Route::get('/comment/delete/{commentId}','CommentController@destroy')->name('delete_comment');

/** Categories */
Route::get('/categories', 'CategoryController@index')->name('list_categories');
Route::get('/category', 'CategoryController@create')->name('create_category');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{categoryId}', 'CategoryController@show')->name('show_category');
Route::delete('/category/{categoryId}', 'CategoryController@destroy')->name('delete_category');
Route::put('/category/{categoryId}', 'CategoryController@edit')->name('edit_category');
Route::post('/category/{categoryId}', 'CategoryController@update')->name('update_category');
Auth::routes();
