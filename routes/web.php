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
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectsTasksController@store');
Route::patch('/tasks/{task}', 'ProjectsTasksController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
