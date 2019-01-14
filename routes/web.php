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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

//for text folktales using text function

Route::get('text','HomeController@text'); 

Route::get('text','HomeController@text');
Route::get('/text1', 'HomeController@index')->name('text');

Route::get('imageUpload', ['as'=>'imageUpload', 'uses'=>'ImageController@index']);
Route::put('imageUpload', ['as'=>'imageUploadFile', 'uses'=>'ImageController@uploadFiles']);


Route::post('/createpost', [
	'uses' => 'PostController@postCreatePost',
	'as' =>'post.create']);

//to upload images
Route::get('/uploadfile','UploadfileController@index');

Route::post('/uploadfile','UploadfileController@upload');

//to view the inserted datas from database
Route::get('/view','ViewController@index')->name('view');

//upload images adn files i.e text
Route::post('file/upload', 'FileController@store')->name('file.upload');
Route::post('upload', 'FileController@upload')->name('upload');

//to post the audio in database
Route::get('/audio','AudioController@index');
Route::post('/audio','AudioController@store')->name('audio');

//to view audio from database
Route::get('/viewAudio', 'ViewAudioController@index')->name('viewAudio');


//to post the video in the database
Route::get('/video','VideoController@index');
Route::post('/video','VideoController@store')->name('video');

Route::get('/viewVideo', 'ViewVideoController@index')->name('viewVideo');

//edit route
Route::get('/edit/User/{id}', 'FileController@edit');
Route::post('/edit/User/{id}','FileController@update');

Route::delete('/delete/User/{id}','FileController@destroy');

//for audio deletion
Route::delete('/delete/Audio/{id}','AudioController@destroy');

//for video deletion
Route::delete('/delete/Video/{id}','VideoController@destroy');

//for viewing all
Route::get('/viewDetail/User/{id}', 'FileController@show');





