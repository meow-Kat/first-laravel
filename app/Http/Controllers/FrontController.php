<?php

namespace App\Http\Controllers;

use App\Contactus;
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


    // 看這邊 上面有點怪怪的 上面備註可以參考
    public function products(){
        $products = DB::table('products')->get();
        // 老師作法
        // php array_push
        $discountPrice = [];
        foreach ($products as $key => $value){
            array_push($discountPrice, round($value->price * $value->discount) );
        }
        return view('front.products.index',compact('products', 'discountPrice','key'));
    }

    public function contactus()
    {
        return view('front.contactus.index');
    }

    public function productsDetail($id){
        // dd($id); // 測試
        $productsRecord = DB::table('products')->find($id); //抓出資料
        //                           新的value : price * discount              ↓ 新的key值
        $discount = DB::table('products')->selectRaw('price * discount as priceDiscount')->find($id);
        // dd($discount);
        // foreach ($productsRecord as $key => $item) {
        //     $price = $item->price;
        //     $discont = $item->discont;
        //     $calc_price = $discont * $price;
        //     $price[$key] = intval($calc_price);
        // }
        // dd($record); // 測試

        return view('front.products.detail',compact('productsRecord','discount'));
    }


    public function push(Request $request){
        // 增加檔案
        Contactus::create([
            // php 串字串用.  ex: 'abv'.'資料'.'abc'
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->context,
        ]);
        // 導到路由網址列上                  key => value 方式
        return redirect('/contactus')->with('message', '成功聯絡我們');
    }

    // 改資料方法 兩種方法
    public function change(){
        // // 第一種 **推薦**
        // // 先把資料撈出來
        // $old_record = Contactus::find(1);
        // // dd($old_record);
        // $old_record->name = 'Meow';
        // // 存檔
        // $old_record->save();

        // 第二種 這個修改是ture跟false 直接完成不會留下紀錄
        // $old_record = Contactus::find(1)->update([
        //     'name' => 'Meow'
        // ]);


        // 複數資料操作 不管幾筆使用陣列處理 把陣列取出來 針對那筆操作
        // where('搜尋的資料', 條件)，符合的項目會找出來
        //                                  第1筆資料 ↓
        // $old_record = Contactus::where('id', 1)->first();

        // 模糊搜尋  在 where 中間加入 'like' 字串   黃開頭的 ↓    ↓ 不管是什麼
        // $old_record = Contactus::where('name', 'like', '黃'.'%')->first();
        $old_record = Contactus::where('name', 'Meow')->get();
        foreach ($old_record as $key => $value) {
            $value->name = 'Cat';
            $value->phone = '0987654321';
            $value->save();
        }
        // dd($old_record);
    }



}
