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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name', 100);
            $table->double('product_price', 11);
            $table->string('product_img', 150);
            $table->integer('product_qty');
            $table->integer('product_sold')->default(0);
            $table->string('product_description', 225);
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('manu_id');
            $table->tinyInteger('product_feature');
            $table->tinyInteger('product_status')->default(0);
            $table->string('token')->nullable();
            $table->timestamps();
            //create foreign-key
            $table->foreign('type_id')->references('type_id')->on('protypes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('manu_id')->references('manu_id')->on('manufactures')->onDelete('cascade')->onUpdate('cascade');
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
