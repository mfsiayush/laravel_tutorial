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


Route::get('testing','TestController@index')->name('myroute');

Route::get('form', 'TestController@form')->name('myform');

Route::group(['middleware'=>'App\Http\Middleware\AuthMiddleware'], function(){
	Route::match(['get', 'post'], '/middletest/{id}','TestController@middletest');
});





Route::get('verify', function(){

	return "Get verify page";
});


Route::post('verify', function(){

	var_dump($_POST);
});


Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

Route::get('ID',function(){
   echo "ID's are: ";
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function () {
	$arr=['list1', 'list2', 'list3', 'list4'];
    return view('about', compact('arr'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


