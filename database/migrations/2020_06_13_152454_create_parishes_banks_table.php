<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishesBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parishes_bank', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parish_id');
            $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade');
            $table->string('subaccount_code');
            $table->bigInteger('paystack_subaccount_id');
            $table->string('name');
            $table->string('account_number');
            $table->integer('percentage_charge')->default('0');
            $table->string('settlement_bank');
            $table->bigInteger('integration')->nullable();
            $table->string('domain')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->string('settlement_schedule')->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('parishes_bank');
    }
}
