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

// 文章列表頁
Route::get('/posts', '\App\Http\Controllers\PostController@index');


// 創建文章
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');   // 這是創建文章的頁面

// 文章詳情頁
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');     // 目前發現下面的Create好像會走到這條，
// 老師:laravel的路由会找到匹配的路由，然后再按照顺序匹配。所以这里创建文章需要放在文章详情前面
// // 創建文章
// Route::get('/posts/create', '\App\Http\Controllers\PostController@create');   // 這是創建文章的頁面
Route::post('/posts', '\App\Http\Controllers\PostController@store');    // 方法和最上面不衝突，因為方法不同，這是創建頁面點提交時的具體行為
// 編輯文章
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');   
Route::post('/posts/{post}', '\App\Http\Controllers\PostController@update');   
// 刪除文章
Route::get('/posts/delete', '\App\Http\Controllers\PostController@delete');   



// ori demo
Route::get('/', function () {
    return view('welcome');
});


// 如果都寫在這裡會非常多!!
// 所以可以這樣寫:
// Route::get('/', '[[控制器]@[行為]';
// 例如:
// Route::get('/posts', 'App\Http\Controllers\PostController@index');    // 一定要加上命名空間



// 也可以用post等
// any :  都可以匹配
// 入只想支持get post >>  使用match
// 表單只支持get post  (如果要put 可能要用一些隱藏方式)

// By ID:
// Route::get('/posts/{id}', 'App\Http\Controllers\PostController@index');

// Group:  共有的屬性   如果一堆都是posts
// Route::group(['prefix' => 'posts'], function () {
//     Route::put('/', 'App\Http\Controllers\PostController@index');
//     Route::get('/posts/{id}', 'App\Http\Controllers\PostController@index');
//     Route::get('/posts/create', 'App\Http\Controllers\PostController@index');  
// });

// By Id 可以這樣:
// Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show');
// function show($id){
//     $post = \App\Post::find($id)
// };

// 或是  用posts
// Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show');
// function show(\App\Post $post){
// }
