<?php

use App\PostCard;
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
Route::get('/channel', "ChannelController@index");
Route::get('/posts', "PostController@index");
Route::get('/facade', function (){
    $postCard = new \App\Service\PostCardService('us',1,1);
    $postCard->hello('ok','sss');
});

Route::get('/facadeway', function (){
   PostCard::hello('first','second');
});



Route::get('/macross', function (){
    dd(\Illuminate\Support\Str::yes('testsss'));
});
