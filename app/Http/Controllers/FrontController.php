<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    // 非公開的不能被抓到 沒有 public
    // funtion 寫法

    public function index(){
        $news = DB::table('news')->get();
        return view('front.news.index', compact('news'));
    }

    public function news(){
        $discont = 0.8;
        $totle = 500 * $discont;
        $news = DB::table('news')->get();
        return view('front.parallax', ['name' => 'meow', 'price' => $totle]);
    }

    //  配合web.php              ↓ 串近來
    public function newsDetail($id){
        // dd($id); // 測試
        $record = DB::table('news')->find($id); //抓出資料
        // dd($record); // 測試
        return view('front.news.detail',compact('record')); // compact('record') 抓出資料
    }

}
