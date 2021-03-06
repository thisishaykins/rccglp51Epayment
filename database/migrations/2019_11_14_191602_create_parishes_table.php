<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->longText('address')->nullable();
            $table->longText('logo')->nullable();
            $table->longText('banner')->nullable();
            $table->string('contact_person');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('paystack_id')->nullable();
            $table->string('paystack_secret_key')->nullable();
            $table->string('paystack_public_key')->nullable();
            $table->longText('slug');
            $table->boolean('status');
            $table->boolean('use_global_offerings')->default(true);
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
        Schema::dropIfExists('parishes');
    }
}
