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


//Route::get('/', 'PagesController@index');



/*Route::get('users',['uses' => 'UsersController@index']);

Route::get('users/create', ['uses' => 'UsersController@create']);

Route::post('users', ['users' => 'UsersController@store']);*/

/*Route::get('users', function () {
	$users = [
		'0' =>[
			'first_name' => 'Dema',
			'last_name' => 'Dorji',
			'location' => 'Thimphu'
		],

		'1' =>[
			'first_name' => 'Passang',
			'last_name' => 'Tenzin',
			'location' => 'Greece'
		]
	];
    return $users;
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

//for text folktales using text function
Route::get('text','HomeController@text');
Route::get('/text1', 'HomeController@index')->name('text');

Route::post('file/upload', 'FileController@store')->name('file.upload');
Route::post('upload', 'FileController@upload')->name('upload');

Route::get('imageUpload', ['as'=>'imageUpload', 'uses'=>'ImageController@index']);
Route::put('imageUpload', ['as'=>'imageUploadFile', 'uses'=>'ImageController@uploadFiles']);




