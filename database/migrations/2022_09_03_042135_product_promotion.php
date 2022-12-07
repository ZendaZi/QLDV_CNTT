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
        Schema::create('Product_Promotion', function (Blueprint $table) {
            $table->integer('IDProduct')->unsigned();
            $table->foreign('IDProduct')->references('IDProduct')->on('Products');
            $table->string('IDProductPromotion');
            $table->string('ProductPromotionDetails');
            $table->float('ProductDiscount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product_Promotion');
    }
};
