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
        Schema::create('products', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->float('price')->default(0);
            $table->float('discount')->default(0);
            $table->boolean('is_percentage_discount')->default(DISABLE);
            $table->float('discount_price')->default(0);
            $table->float('rating')->default(0);
            $table->integer('rating_number')->default(0);

            $table->longText('description')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('primary_image')->nullable();

            $table->boolean('is_featured_product')->default(ENABLE);            
            $table->boolean('is_best_selling_product')->default(ENABLE);            
            $table->boolean('is_new_arrival_product')->default(ENABLE);  
                      
            $table->boolean('enable')->default(ENABLE);            

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
        Schema::dropIfExists('products');
    }
};
