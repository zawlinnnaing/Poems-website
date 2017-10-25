<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Collections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_collections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poem_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
        Schema::table('tbl_collections', function (Blueprint $table){
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
        Schema::dropIfExists('tbl_collections');
    }
}
