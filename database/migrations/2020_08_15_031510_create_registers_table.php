<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price');
            $table->integer('count');
            $table->float('total');
            $table->integer('totalventa');
            $table->Integer('idproduct')->unsigned();
            $table->foreign('idproduct')->references('id')->on('products')->onDelete('cascade');
            $table->Integer('idcategory')->unsigned();
            $table->foreign('idcategory')->references('id')->on('category')->onDelete('cascade');
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
