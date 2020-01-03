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

// 36ページ
// Route::get('/hello/{msg}',function($msg){
// $html = <<<EOF
// <html>
// <head>
//   <title></title>
// </head>
// <body>
//   <h1>Hello</h1>
//   <p>{$msg}</p>
//   <p>これはサンプルです</p>
// </body>
// </html>
// E0F;
//   return $html;
// });

// 45ページ
// Route::get('hello/{id?}/{pass?}','PostsController@index');

// 47ページ
// Route::get('hello','PostsController@index');

// Route::get('hello/other','PostsController@other');

// 49ページ
// Route::get('hello','PostsController');

// 52,62,67,72ページ
// Route::get('hello','PostsController@index');

// 60ページ
// Route::get('hello',function(){
//   return view('hello.index');
// });

// 65ページ
// Route::get('hello/{id?}','PostsController@index');

// 72　123ページ
Route::post('hello','PostsController@post');

// 112ページ〜
use App\Http\Middleware\HelloMiddleware;
// 112ページ
// Route::get('hello','PostsController@index')->middleware(HelloMiddleware::class);

// 118　123ページ
Route::get('hello','PostsController@index');

// 120ページ〜
Route::get('hello','PostsController@index')->middleware('helo');

// 189ページ〜
Route::get('hello/add','PostsController@add');
Route::get('hello/add','PostsController@create');

// 193ページ〜
Route::get('hello/edit','PostsController@edit');
Route::get('hello/edit','PostsController@update');

// 195ページ〜
Route::get('hello/del','PostsController@del');
Route::get('hello/del','PostsController@remove');




