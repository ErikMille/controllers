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
Route::get('/question/index','QuestionController@index')->name('question.index');
Route::get('/question/show/{id}','QuestionController@show')->name('question.show');
Route::get('/category','CategoryController@index');
Route::get('/answer/{id}','AnswerController@show')->name('answer.index');
Route::post('/answer/{id}','AnswerController@vote')->name('answer.show');

