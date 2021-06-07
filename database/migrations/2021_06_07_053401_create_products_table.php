<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 透過  migrations. 寫資料型態 就可以不用透過資料表建立
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // 資料型態('欄位名稱')     ↓ 寫備註 寫給人類看
            $table->string('name')->comment('產品名稱');
            // integer 整數型態
            $table->integer('price')->comment('價格');
            // float 浮點數                                    ↓ 寫預設值
            $table->float('discount')->comment('產品名稱')->default(0.8);
            // text 文字                                  ↓ 可以空白的欄位
            $table->text('text')->comment('產品描述')->nullable();
            // 圖片 longtext 企劃階段要先把欄位都確認好 避免事後修改 加欄位很麻煩
            $table->longText('img')->comment('產品圖片');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
