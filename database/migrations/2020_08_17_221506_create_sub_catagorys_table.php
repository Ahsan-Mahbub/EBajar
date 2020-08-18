<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCatagorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_catagorys', function (Blueprint $table) {
            $table->bigIncrements('sub_category_id');
            $table->unsignedBigInteger('category_name');
            $table->foreign('category_name')->references('category_id')->on('categories')->onDelete('cascade');
            $table->string('sub_category_name');
            $table->unsignedBigInteger('brand_name');
            $table->foreign('brand_name')->references('brand_id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('sub_catagorys');
    }
}
