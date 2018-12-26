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

Route::post('/createpost', [
	'uses' => 'PostController@postCreatePost',
	'as' =>'post.create']);

//to upload images
Route::get('/uploadfile','UploadfileController@index');

Route::post('/uploadfile','UploadfileController@upload');

//to view the inserted datas from database
Route::get('view','ViewController@index');

//to post the audio in database
Route::get('/audio','AudioController@index');
Route::post('/audio','AudioController@store')->name('audio');

//to post the video in the database
Route::get('/video','VideoController@index');
Route::post('/video','VideoController@store');
