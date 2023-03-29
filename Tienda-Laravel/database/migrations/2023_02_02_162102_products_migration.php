<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $table){
            $table->increments('id');
            $table->string('name',100);
            $table->double('price');
            $table->string('img',100);
            $table->string('condition',20);
            $table->string('description',50);
            $table->boolean('ship');
            $table->integer('stock');
            $table->string('size',20);
            $table->string('status',20);
            $table->string('slug');//para ruta amigable

            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categorys');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');



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
};
