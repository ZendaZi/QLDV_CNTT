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
        Schema::create('Contract_Image', function (Blueprint $table) {
            $table->integer('IDContract')->unsigned();
            $table->foreign('IDContract')->references('IDContract')->on('Contract');
            $table->string('Link');
            $table->string('ContractImgageDetails');
            $table->timestamp('Created_at')->useCurrent();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contract_Image');
    }
};
