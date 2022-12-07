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
        Schema::create('Product_Feedback', function (Blueprint $table) {
            $table->string('IDVersion');
            $table->foreign('IDVersion')->references('IDVersion')->on('Product_version');
            $table->increments('IDFeedback');
            $table->integer('IDCustomer');
            $table->String('IDUser');
            $table->String('Content');
            $table->String('Rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product_Feedback');
    }
};
