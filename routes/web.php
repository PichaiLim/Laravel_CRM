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

Auth::routes();

Route::prefix('/')->group(function(){
    Route::get('/', function () {
        return view('index');
    })->name('home');
    
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/project', function(){
        return view('project');
    })->name('project');

    Route::get('/service', function(){
        return view('service');
    })->name('service');

    Route::prefix('/password')->group(function(){
        Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('');
        Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm ')->name('password.reset');
    });
});

Route::group(['prefix'=>'/admin'/* , 'middleware'=>['auth'] */],function(){
    Route::get('/', function(){
        return redirect()->route('admin.home');
    });

    Route::group(['prefix'=>'/users/'], function (){
        Route::get('/', 'Admin\UserController@index')->name('admin.user.home');
        Route::get('/search/{page?}', 'Admin\UserController@search')->name('admin.user.search')->where('page','[0-9]+');
        Route::get('/show/{id}', 'Admin\UserController@show')->name('admin.user.show')->where('id', '[0-9]+');
        Route::get('/create', 'Admin\UserController@create')->name('admin.user.create');
        Route::post('/create', 'Admin\UserController@store')->name('admin.user.create.submit');
        Route::get('/edit/{id}', 'Admin\UserController@edit')->name('admin.user.edit')->where('id','[0-9]+');
        Route::post('/edit/{id}', 'Admin\UserController@update')->name('admin.user.edit.submit')->where('id','[0-9]+');
        Route::get('/destroy/{id}', 'Admin\UserController@destroy')->name('admin.user.delete')->where('id', '[0-9]+');
    });


    Route::group(['prefix'=>'/settings/'], function(){
        Route::get('/', 'Admin\AdminController@index')->name('admin.home');
        Route::get('/create', 'Admin\AdminController@create')->name('admin.create.admin');
        Route::post('/create', 'Admin\AdminController@store')->name('admin.create.admin.submit');
        Route::get('/search/{page?}', 'Admin\AdminController@search')->name('admin.search')->where('page', '[0-9]+');
        Route::get('/show/{id}', 'Admin\AdminController@show')->name('admin.show')->where('id', '[0-9]+');
        Route::get('/edit/{id}', 'Admin\AdminController@edit')->name('admin.edit.admin')->where('id', '[0-9]+');
        Route::post('/edit/{id}', 'Admin\AdminController@update')->name('admin.edit.admin.submit')->where('id', '[0-9]+');
        Route::get('/delete/{id}', 'Admin\AdminController@destroy')->name('admin.delete')->where('id', '[0-9]+');
    });

});