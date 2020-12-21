<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferingsTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('offering_id');
            $table->foreign('offering_id')->references('id')->on('offerings')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('parish_id');
            $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade');
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('offering_currencies')->onDelete('cascade');
            $table->boolean('is_success');
            $table->float('amount', 9, 2);
            $table->float('fees')->nullable();
            $table->float('fees_split')->nullable();
            $table->float('requested_amount')->nullable();
            $table->string('reference');
            $table->boolean('status')->default(false);
            $table->string('status_response');
            $table->string('status_message');
            $table->string('channel');
            $table->string('currency');
            $table->string('ip_address');
            $table->string('transaction_date');
            $table->string('transaction_created_at');
            $table->string('transaction_paid_at');
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
        Schema::dropIfExists('offering_transactions');
    }
}
