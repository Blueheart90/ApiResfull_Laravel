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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('quantity');
            // $table->unsignedInteger('buyer_id');
            $table->foreignId('buyer_id')->constrained('users');
            // $table->unsignedInteger('product_id');
            $table->foreignId('product_id')->constrained('products');


            // $table->foreign('buyer_id')->references('id')->on('users');

            // $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('transactions');
    }
};
