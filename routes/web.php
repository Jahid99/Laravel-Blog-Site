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

Route::group(['middleware' => ['web']], function () {

Route::get('/', 'HomePageController@index');

Route::get('/home', 'AdminController@index');

Route::get('contact', 'ContactController@index');

Route::post('contact', 'ContactController@postContact');

Route::get('viewpost/{blogPost}', 'BlogPostController@show');

Route::get('/blog', [
	    'uses' => 'BlogPostController@index',
	    'as' => 'user.post'
	]);

Route::get('/admin', [
	    'uses' => 'AdminController@index',
	    'as' => 'admin.index'
	]);

Route::get('/textedit/{id}', [
	    'uses' => 'TextController@edit',
	    'as' => 'admin.textedit'
	]);

Route::put('/textupdate/{id}', [
	    'uses' => 'TextController@update',
	    'as' => 'admin.textupdate'
	]);

Route::get('/sliders', [
	    'uses' => 'SliderController@index',
	    'as' => 'admin.slider'
	]);

Route::get('/slider_edit/{id}', [
	    'uses' => 'SliderController@edit',
	    'as' => 'slider.edit'
	]);

Route::put('/slider_update/{id}', [
	    'uses' => 'SliderController@update',
	    'as' => 'slider.update'
	]);

Route::get('/slider_create', [
	    'uses' => 'SliderController@create',
	    'as' => 'slider.create'
	]);

Route::post('/slider_store', [
	    'uses' => 'SliderController@store',
	    'as' => 'slider.store'
	]);

Route::get('/destroy_slider/{id}', [
	    'uses' => 'SliderController@destroy',
	    'as' => 'slider.destroy'
	]);

Route::group(['middleware' => ['auth']], function () {

Route::get('/postlist', [
	    'uses' => 'BlogPostController@admin_index',
	    'as' => 'post.list'
	]);

Route::get('/post_edit/{id}', [
	    'uses' => 'BlogPostController@edit',
	    'as' => 'post.edit'
	]);

Route::put('/post_update/{id}', [
	    'uses' => 'BlogPostController@update',
	    'as' => 'post.update'
	]);

Route::get('/destroy/{id}', [
	    'uses' => 'BlogPostController@destroy',
	    'as' => 'post.destroy'
	]);

Route::get('/post_create', [
	    'uses' => 'BlogPostController@create',
	    'as' => 'post.create'
	]);

Route::post('/post_store', [
	    'uses' => 'BlogPostController@store',
	    'as' => 'post.store'
	]);
});

});

Auth::routes();