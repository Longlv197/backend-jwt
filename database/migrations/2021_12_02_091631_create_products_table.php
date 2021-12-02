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
            $table->double('price_sale');
            $table->text('image');
            $table->text('images');
            $table->text('description');
            $table->smallInteger('state_id');
            $table->smallInteger('category_id');
            $table->smallInteger('color_id');
            $table->smallInteger('unit_id');
            $table->integer('quantity');
            $table->interger('view');
            $table->interger('sold');
            $table->float('rating');
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
