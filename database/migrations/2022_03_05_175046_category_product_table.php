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
        Schema::create('category_product', function (Blueprint $table) {
            // $table->unsignedInteger('category_id');
            $table->foreignId('category_id')->constrained('categories');
            // $table->unsignedInteger('product_id');
            $table->foreignId('product_id')->constrained('products');

            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
};
