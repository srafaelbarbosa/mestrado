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

// InnovationController
Route::get('/', 'InnovationController@home');

Route::get('/innovation/home', 'InnovationController@home');

Route::get('/innovation/contact', 'InnovationController@contact');

Route::get('/innovation/about', 'InnovationController@about');

Route::get('/innovation/guide', 'InnovationController@guide');

Route::get('/innovation/form', 'InnovationController@form');

Route::get('/innovation/softwares', 'InnovationController@softwares');

Route::get('/innovation/login', 'InnovationController@login');

Route::get('/innovation/return_quiz', 'InnovationController@return_quiz');

Route::get('/innovation/result/{software}', 'InnovationController@result');

Route::get('/innovation/indicators', 'InnovationController@indicators');
// InnovationController


// QuizController
Route::get('/quiz/evaluate', 'QuizController@evaluate');

Route::get('/quiz/result/{id}', 'QuizController@result');

Route::post('/quiz/evaluatesoftware', 'QuizController@evaluatesoftware');
// QuizController

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
