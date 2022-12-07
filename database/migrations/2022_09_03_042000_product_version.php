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
        Schema::create('Product_Version', function (Blueprint $table) {
            $table->integer('IDProduct')->unsigned();
            $table->foreign('IDProduct')->references('IDProduct')->on('Products');
            $table->string('IDVersion')->primary();
            $table->string('VersionDetails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product_Version');
    }
};
