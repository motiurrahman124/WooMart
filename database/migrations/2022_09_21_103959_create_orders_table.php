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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('billing_id');
            $table->integer('shipping_id');
            $table->float('total_amount')->default(0);
            $table->float('discount')->default(0);
            $table->float('vat')->default(0);
            $table->float('total_vat')->default(0);
            $table->float('delivery_fee')->default(0);
            $table->float('grand_total')->default(0);
            $table->string('payment_status')->default('pending');
            $table->string('status')->default('pending');
            $table->boolean('is_confirmed')->default(false);
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
        Schema::dropIfExists('orders');
    }
};
