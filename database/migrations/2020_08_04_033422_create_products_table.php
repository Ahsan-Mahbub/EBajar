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
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('category_name')->nullable();
            $table->foreign('category_name')->references('category_id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('sub_category_name')->nullable();
            $table->foreign('sub_category_name')->references('sub_category_id')->on('sub_categories')->onDelete('cascade');
            $table->unsignedBigInteger('brand_name')->nullable();
            $table->foreign('brand_name')->references('brand_id')->on('brands')->onDelete('cascade');
            $table->string('product_name')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_prize')->nullable();
            $table->string('description')->nullable();
            $table->integer('has_image')->default(null);
            $table->integer('status')->default(1);
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
