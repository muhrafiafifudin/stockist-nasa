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
            $table->string('product_code');
            $table->string('name');
            $table->string('images');
            $table->tinyInteger('categories_id');
            $table->tinyInteger('sub_categories_id')->nullable();
            $table->bigInteger('price');
            $table->decimal('weight', 10, 2);
            $table->text('small_description');
            $table->longText('description')->nullable();
            $table->longText('benefit')->nullable();
            $table->longText('method')->nullable();
            $table->string('slug');
            $table->integer('qty');
            $table->tinyInteger('status')->comment('0 for View, 1 for Hidden')->nullable();
            $table->tinyInteger('trending')->comment('0 for NOT Trending, 1 for Trending')->nullable();
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
