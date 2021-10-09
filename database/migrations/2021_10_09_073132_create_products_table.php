<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_name')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('type')->nullable();
            $table->string('item')->nullable();
            $table->float('weight')->nullable();
            $table->string('sku')->nullable();
            $table->double('price_sell')->nullable();
            $table->double('price_promo')->nullable();
            $table->double('price_agent')->nullable();
            $table->string('photo')->nullable();
            $table->string('recommendation')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->integer('ordering')->nullable();
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
}
