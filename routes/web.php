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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/top', function () {
    return view('index');
});
Route::get('/feature_article', function () {
    return view('feature_article');
});
Route::get('/feature_list', function () {
    return view('feature_list');
});
// 中身同じ
Route::get('/search_result', function () {
    return view('search_result');
});
Route::get('/hashtag_result', function () {
    return view('hashtag_result');
});
// mypage
Route::get('/mypage', function () {
    return view('mypage');
});
// ライター一覧
Route::get('/writer', function () {
    return view('writer_list');
});
// ライター詳細
Route::get('/writer/detail', function () {
    return view('writer_detail');
});
// 記事詳細
Route::get('/article/1', function () {
    return view('article_detail');
});
// TUFSPOTについて
Route::get('/about', function () {
    return view('about');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
