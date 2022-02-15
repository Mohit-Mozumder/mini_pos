<?php

use Illuminate\Support\Facades\Route;

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

Route::get('users', function () {
    return view('users/users');
});

// Route::get('groups', function () {
//     return view('groups/groups');
// });

// Route::get('groups','UsersController@index') ;

Route::get('/groups','App\Http\Controllers\UserGroupsController@index');
Route::get('/groups/create','App\Http\Controllers\UserGroupsController@create');