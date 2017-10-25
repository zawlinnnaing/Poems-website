<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Keys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('poem_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('tbl_keys',function (Blueprint $table){
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('poem_id')->references('id')->on('tbl_poems')->onDelete('cascade');
          $table->foreign('author_id')->references('id')->on('tbl_authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_keys');
    }
}
