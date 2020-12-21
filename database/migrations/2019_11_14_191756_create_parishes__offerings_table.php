<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishesOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parishes_offerings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parish_id');
            $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade');
            $table->unsignedBigInteger('offering_id');
            $table->foreign('offering_id')->references('id')->on('offerings')->onDelete('cascade');
            $table->longText('helper_note')->nullable();
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
        Schema::dropIfExists('parishes__offerings');
    }
}
