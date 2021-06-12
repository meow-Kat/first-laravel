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

// 作業做的
Route::get('/products', 'FrontController@products');

Route::get('/products/{id}', 'FrontController@productsDetail');
// 原本get 改成post 對應contactus
Route::post('/push', 'FrontController@push');

Route::get('/change', 'FrontController@change');

Route::get('/contactus', 'FrontController@contactus');


// back to end

Route::get('/admin', 'ContactusController@admin');

// contact us
Route::get('/admin/contactus', 'ContactusController@contactus' );

Route::get('/admin/contactus/edit/{id}', 'ContactusController@edit' );
Route::post('/admin/contactus/update/{id}', 'ContactusController@update' );
Route::delete('/admin/contactus/delete/{id}', 'ContactusController@delete');

// Product
Route::get('/admin/product', 'ProductController@product' );

Route::get('/admin/product/add', 'ProductController@add');

Route::post('/admin/product/push', 'ProductController@push');
Route::get('/admin/product/edit/{id}', 'ProductController@productEdit');
Route::post('/admin/product/update/{id}', 'ProductController@productUpdate');
Route::delete('/admin/product/delete/{id}', 'ProductController@productDelete');
