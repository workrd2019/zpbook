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
Route::get('users', function() {
    return 'word';
});
Route::match(['get', 'post'], '/users/profile', function() {
    return 'match';
});
Route::any('multy', function() {
    return 'multy';
});

Route::get('user/info','UserController@info');

// Route::group(['prefix' => 'manage', 'namespace' => 'Modules\Manage\Http\Controllers'], 
// function() {
//     Route::get('/manage', 'ManageController@index');
// });
Route::get('/manage', '\Modules\Manage\Http\Controllers\ManageController@index');

