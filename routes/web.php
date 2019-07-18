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

Route::get('/', 'PagesController@index');

Route::get('/login', [
    'as' => 'account.showLogin',
    'uses' => 'AccountController@showLogin',
]);

Route::post('/login', [
    'as' => 'account.login',
    'uses' => 'AccountController@login'
]);

Route::get('/register', 'AccountController@showRegister')->name('account.showRegister');

Route::post('/register', 'AccountController@register')->name('account.register');




// blog
Route::get('/article', [
    'as' => 'article.index',
    'uses' => 'ArticleController@index'
]);

Route::get('/article/create', [
    'as' => 'article.create',
    'uses' => 'ArticleController@create'
]);

Route::post('/article/create', [
    'as' => 'article.store',
    'uses' => 'ArticleController@store'
]);

Route::get('/article/{id}/edit', [
    'as' => 'article.edit',
    'uses' => 'ArticleController@edit'
]);

Route::put('/article/{id}', [
    'as' => 'article.update',
    'uses' => 'ArticleController@update'
]);

Route::delete('/article/{id}', [
    'as' => 'article.destroy',
    'uses' => 'ArticleController@destroy'
]);

Route::get('/article/{id}', [
    'as' => 'article.show',
    'uses' => 'ArticleController@details'
]);
