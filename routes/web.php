<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    echo "My name is Shahanaz Akter";
});
Route::get('/register', function () {
    return view('Register');
});
// Route::get('/', function () {
//     return view('Index');
// });


Route::post('/update_by_id/{id}', 'ProductsController@update_by_id');
Route::get('/usershow', 'PeopleController@UserShow');
Route::get('/login', function () {
    return view('Login');
});
// people controller
Route::post('/checkrole', 'PeopleController@CheckRole');
Route::post('/save_people', 'PeopleController@Save');

// middlewareGroups
Route::group(['middleware' => ['customAdmin']], function () {
    Route::get('/show', 'ProductsController@show');
    Route::get('/delete/{id}', 'ProductsController@delete');
    Route::get('/update/{id}', 'ProductsController@update');
    Route::get('/insert', 'ProductsController@insert');
    Route::post('/store', 'ProductsController@store');
});
Route::get('/noaccess', function () {
    return view('NoAccess');
});
Route::get('/logout', function () {
    Session::forget('LoginUser');
    Session::forget('role');
    return view('Logout');
});
