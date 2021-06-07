<?php

use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// 在這裡寫 php處理的資料 可多筆變數
// Route::get('/', function () {
//     // ['key' => 'value']
//     $discont = 0.8;
//     $totle = 500 * $discont;
//     return view('front.parallax', ['name' => 'meow', 'price' => $totle]);
// });
// Route::get('/news', function () {
//     // 輸入完DB要enter讓最上面抓到DB的套件  ->get() 抓出來
//     $news = DB::table('news')->get();
//     // dd跟consolog一樣
//     // dd($news);
//     // 傳到前端畫面 不用$字號 概念跟['key' => 'value']一樣
//     return view('front.news', compact('news'));
// });
// 以上搬到Controller


// 每個功能要有Controller 邏輯處理寫在Controller Route只寫路徑
// Controller位置 app/http/controllers
Route::get('/', 'FrontController@news');

// 不用改路徑
Route::get('/news', 'FrontController@index');
// news串資料       ↓ 資料
Route::get('/news/{id}', 'FrontController@newsDetail');

