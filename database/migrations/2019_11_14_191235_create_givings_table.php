<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGivingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('givings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('offering_id');
            $table->foreign('offering_id')->references('id')->on('offerings')->onDelete('cascade');
            $table->unsignedBigInteger('parish_id');
            $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade');
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('offering_currencies')->onDelete('cascade');
            // $table->unsignedBigInteger('transaction_id');
            // $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->float('amount', 9, 2);
            $table->string('comment_feedback')->nullable();
            $table->boolean('status')->default(false);
            $table->string('status_message')->nullable();
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
        Schema::dropIfExists('givings');
    }
}
