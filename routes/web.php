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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sign', "userControler@add_user");
Route::post('/sign', "userControler@add_user");
Route::get('/home', "userControler@home");
Route::post('/sign', "userControler@add_user");
Route::get('/addplace', "adminController@add_place");
Route::post('/addplace', "adminController@add_place");
Route::get('/addpackage', "adminController@add_package");
Route::post('/addpackage', "adminController@add_package");
Route::get('/addsubject', "adminController@add_subject");
Route::post('/addsubject', "adminController@add_subject");
Route::get('/profile/{id}', "adminController@profile");
Route::get('/viewuser', "adminController@view_user");
Route::get('/deletplace', "adminController@delete_place");
Route::get('/deletsubject', "adminController@delete_subject");
Route::get('/updatepackage', "adminController@update_package");
Route::get('/editpackage/{id}', "adminController@edit_package");
Route::post('/editpackage/{id}', "adminController@edit_package");
Route::post('/editpackage', "adminController@check_data_user");
Route::get('/login_home', "userControler@login_home");
Route::get('/login_book/{id}', "userControler@login_book");
Route::get('/check_home', "userControler@check_data_user");
Route::get('/logout', "userControler@get_logout");
Route::get('/check_package/{id}', "userControler@checkdata_backage");
Route::get('/book/{id}', "userControler@booking");
Route::post('/search', "userControler@search");
Route::get('/ticket/{id}', "userControler@ticket");