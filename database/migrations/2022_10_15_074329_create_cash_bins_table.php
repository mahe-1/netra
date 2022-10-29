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
        Schema::create('cash_bins', function (Blueprint $table) {
            $table->id();
	    $table->timestamps();
	    $table->string('tag1');
	    $table->string('tag2');
	    $table->string('binnum');
	    $table->integer('amount')->default(0);
	    $table->integer('2kc')->default(0);
	    $table->integer('5hc')->default(0);
	    $table->integer('1hc')->default(0);
	    $table->string('location')->default('out');
	    $table->string('locked')->default('no');
	    $table->string('permission')->default('none');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_bins');
    }
};
