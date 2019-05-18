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

/*

GET /projects Index
GET /projects/create create
GET /projects/1 view

POST /projects storing
GET /projects/1/edit edit

PATCH /projects/1 (update)

DELETE /projects/1 delete

*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectController');

// Route::get('/projects', 'ProjectController@index');
// Route::get('/projects/create', 'ProjectController@create');
// Route::post('/projects', 'ProjectController@store');
// Route::get('/projects/{project}', 'ProjectController@show');
// Route::get('/projects/{project}/edit', 'ProjectController@edit');
// Route::patch('/projects/{project}', 'ProjectController@update');
// Route::delete('/projects/{project}', 'ProjectController@destroy');