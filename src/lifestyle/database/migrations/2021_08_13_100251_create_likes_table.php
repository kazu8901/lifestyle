<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned(); // 符号無し属性に変更
            $table->foreign('user_id')->references('id')->on('users'); // 外部キー参照
            $table->bigInteger('post_id')->unsigned(); // 符号無し属性に変更
            $table->foreign('post_id')->references('id')->on('posts'); // 外部キー参照
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
        Schema::dropIfExists('likes');
    }
}
