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
        Schema::create('information_user', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('Fullname');
            $table->date('Birthday');
            $table->string('Address');
            $table->string('IDCardNumber');
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->string('Competence');
            $table->string('Link');
            $table->string('token', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informationuser');
    }
};
