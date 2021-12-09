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
            $table->increments('id');
            $table->string('name', 150);
            $table->double('price');
            $table->double('price_sale')->nullable();
            $table->text('image');
            $table->text('images')->nullable();
            $table->text('description')->nullable();
            $table->smallInteger('state_id')->default(1);
            $table->smallInteger('category_id');
            $table->text('color_id');
            $table->text('unit_id');
            $table->integer('quantity')->nullable();
            $table->integer('view')->nullable();
            $table->integer('sold')->nullable();
            $table->float('rating')->nullable();
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
