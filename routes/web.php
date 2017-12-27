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
    Route::get('/home', 'Admin\AdminController@index')->name('admin.home');

    Route::get('/settings', function(){
        echo "setting";
    })->name('admin.settings');
});
