<?php

use App\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 將資料表內的所有資料清空
        // DB::table('products')->truncate();

    // 再輸入  php artisan db:seed --class=ProductSeeder 資料表名稱要對好
        // 產 30比
        // for ($i=0; $i < 30; $i++) {
        // 隨機產一些字
        // DB::table('products')->insert([
            //    字串 ↓
            // 'name' => Str::random(10),
            // 'price' => rand(100,1000), // 100~1000之間
            // 'discount' => rand(1,10) / 10,
            // 'text' => Str::random(16),
            // 'img' => Str::random(16),
        // ]);
        // }
        Product::truncate();
        factory(Product::class, 30)->create();

    }
}
