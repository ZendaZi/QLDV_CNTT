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
        Schema::create('Product_Image', function (Blueprint $table) {
            $table->integer('IDProduct')->unsigned();
            $table->foreign('IDProduct')->references('IDProduct')->on('Products');
            $table->string('Link');
            $table->string('ImageDetails');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductImage');
    }
};
