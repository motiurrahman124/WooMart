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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('order_id');
            $table->integer('payment_id')->nullable();
            $table->float('amount')->nullable();
            $table->float('amount_refunded')->nullable();
            $table->float('application_fee')->nullable();
            $table->float('application_fee_amount')->nullable();
            $table->float('transaction_id')->nullable();
            $table->float('payment_method')->nullable();
            $table->float('payment_method_type')->nullable();
            $table->float('status')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
