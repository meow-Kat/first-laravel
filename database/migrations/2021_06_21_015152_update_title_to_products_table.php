<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTitleToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
                                    // ->change() 可以改變目前賦予的格式
            $table->longText('name')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // public function down() 把執行後反悔 up 寫了什麼，down要反著寫，執行 rollback 才有作用
            // rollback 會執行最一個 batch 數字最大的資料表
            $table->string('name')->change();
        });
    }
}
