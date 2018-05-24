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

Route::get('/projects', 'ProjectController@index')->name('project.index');
Route::get('/projects/create', 'ProjectController@create')->name('project.create');
Route::post('/projects/store', 'ProjectController@store')->name('project.store');
Route::get('/projects/{project}', 'ProjectController@show')->name('project.show');
Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('project.edit');
Route::put('/projects/{project}', 'ProjectController@update')->name('project.update');
