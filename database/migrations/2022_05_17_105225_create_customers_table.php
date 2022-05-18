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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('Full_name');
            $table->string('Sex');
            $table->string('age');
            $table->string('nationality');
            $table->string('kebele_ID');
            $table->string('region');
            $table->string('zone');
            $table->string('woreda');
            $table->string('kebele');
            $table->string('trade_type');
            $table->string('trade_name');
            $table->string('trade_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
