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
        Schema::create('Term_Of_Contract', function (Blueprint $table) {
            $table->integer('IDContract')->unsigned();
            $table->foreign('IDContract')->references('IDContract')->on('Contract');
            $table->string('RulesContractDetails');
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
        Schema::dropIfExists('Term_Of_Contract');
    }
};
