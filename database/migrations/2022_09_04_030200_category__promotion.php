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
        Schema::create('Category_Promotion', function (Blueprint $table) {
            $table->increments('IDCategoryPromotion');
            $table->integer('IDCategory');
            $table->foreign('IDCategory')->references('IDCategory')->on('Category');
            $table->string('CategoryPromotionDetails');
            $table->string('CategoryPromotionName');
            $table->float('CategoryDiscount');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('Expired_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Category_Promotion');
    }
};
