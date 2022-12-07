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
        Schema::create('Customer_Infomation', function (Blueprint $table) {
            $table->increments('IDCustomer');
            $table->string('CustomerName');
            $table->string('Address');
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->string('TypeOfCustomer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customer_Infomation');
    }
};
