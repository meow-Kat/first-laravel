<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConractusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conractuses', function (Blueprint $table) {
            $table->id();

            $table->char('name')->comment('姓名');
            $table->char('email')->comment('信箱');
            $table->char('phone')->comment('電話');
            $table->string('content')->comment('內容');

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
        //                      自動+es ↓
        Schema::dropIfExists('conractuses');

    }
}
