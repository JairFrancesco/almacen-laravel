<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('/about', 'HomeController@showAbout');

Route::get('/users/register', 'UserController@showRegister');
Route::post('/users/register', 'UserController@register');
Route::get('/users/login', 'UserController@showLogin');
Route::post('/users/login', 'UserController@login');
Route::get('/users/logout', 'UserController@logout');

//Route::get('/questions/myquestions', 'QuestionController@showMyQuestions');
Route::get('/questions/myquestions', array(
    'before' => 'auth',
    'uses' => 'QuestionController@showMyQuestions')
);
