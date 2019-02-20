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
Route::get('/quiz/home', 'QuizController@home');

Route::get('/quiz/evaluate', 'QuizController@evaluate');

Route::get('/quiz/contact', 'QuizController@contact');

Route::get('/quiz/about', 'QuizController@about');

Route::get('/quiz/result/{id}', 'QuizController@result');

Route::get('/teste', 'TestController@home');

Route::get('/', 'QuizController@home');

Route::post('/quiz/evaluatesoftware', 'QuizController@evaluatesoftware');

Route::get('/quiz/guide', 'QuizController@guide');

Route::get('/quiz/return_quiz', 'QuizController@return_quiz');

Route::get('/quiz/login', 'QuizController@login');

Route::get('/quiz/softwares', 'QuizController@softwares');

Route::get('/quiz/form', 'QuizController@form');


