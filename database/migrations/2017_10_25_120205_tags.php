<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poem_id')->unsigned();
            $table->string('tags',50);
            $table->timestamps();
        });
        Schema::table('tbl_tags',function (Blueprint $table){
          $table->foreign('poem_id')->references('id')->on('tbl_poems')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tags');
    }
}
