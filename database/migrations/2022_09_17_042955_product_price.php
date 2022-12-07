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
        Schema::create('Product_Price', function (Blueprint $table) {
            $table->string('IDVersion');
            $table->foreign('IDVersion')->references('IDVersion')->on('Product_Version');
            $table->string('Price');
            $table->string('PriceDetails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product_Price');
    }
};
