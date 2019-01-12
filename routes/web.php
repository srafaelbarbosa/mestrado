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
Route::get('/quiz/teste', 'QuizController@home');

Route::get('/quiz/evaluate', 'QuizController@evaluate');

Route::get('/quiz/contact', 'QuizController@contact');

Route::get('/quiz/about', 'QuizController@about');




Route::get('/quiz/result/{id}', 'QuizController@result');

Route::get('/teste', 'TestController@home');


Route::get('/', function () {
    return view('welcome');
});

