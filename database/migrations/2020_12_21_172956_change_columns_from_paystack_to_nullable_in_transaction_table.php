<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsFromPaystackToNullableInTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('access_code')->nullable();
            $table->boolean('initiated_status')->default(false);
            $table->string('status_response')->nullable()->change();
            $table->string('status_message')->nullable()->change();
            $table->string('channel')->nullable()->change();
            $table->string('currency')->nullable()->change();
            $table->string('ip_address')->nullable()->change();
            $table->string('transaction_date')->nullable()->change();
            $table->string('transaction_created_at')->nullable()->change();
            $table->string('transaction_paid_at')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('status_response')->nullable(false)->change();
            $table->string('status_message')->nullable(false)->change();
            $table->string('channel')->nullable(false)->change();
            $table->string('currency')->nullable(false)->change();
            $table->string('ip_address')->nullable(false)->change();
            $table->string('transaction_date')->nullable(false)->change();
            $table->string('transaction_created_at')->nullable(false)->change();
            $table->string('transaction_paid_at')->nullable(false)->change();
        });
    }
}
