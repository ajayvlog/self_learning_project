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

/* login page */

 
 Route::get('/log',"youtube@log");

Route::post('/logged',"youtube@logged");

Route::get('/logout',"youtube@logout");


 Route::get('/board',"youtube@board");

 
 Route::get('/img',"TodoController@img");

 Route::get('/join',"youtube@join");

  Route::get('/admin/err',"youtube@err");

  Route::post('/admin/check',"youtube@check");

 Route::get('/admin',"TodoController@admin");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site/{name?}',"youtube@index");


Route::get('/f',"youtube@xyz");

Route::get('/mail',"youtube@mail");



Route::get('/b',"youtube@b");


Route::get('/db',"youtube@db");

//Route::get('/delete/{id?}',"youtube@delete");



Route::get('/v/{name}',"youtube@v");


Route::get('/todo',"youtube@index");


Route::post('/save',"TodoController@store");


Route::post('/update',"TodoController@update");


Route::get('/show',"TodoController@show");

//Route::get('/check',"TodoController@check");


Route::get('/reg',"TodoController@reg");

Route::post('/register',"TodoController@register");


Route::get('/delete/{id?}',"TodoController@delete");

Route::get('/edit/{id?}',"TodoController@edit");


Route::post('/login',"youtube@login");


Route::get('/user/{name?}', function ($name="hellosdflkjk") {
    //return view('home');

    return $name;

});


 

?>
