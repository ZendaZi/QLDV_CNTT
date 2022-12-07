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
        Schema::create('Contract', function (Blueprint $table) {
            $table->increments('IDContract');
            $table->integer('IDCustomer');
            $table->integer('id');
            $table->integer('IDProduct');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('Expired_at')->nullable();
            $table->bigInteger('ContractPrice');
            $table->string('ContractStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contract');
    }
};
