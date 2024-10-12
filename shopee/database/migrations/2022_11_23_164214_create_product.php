<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name');
            $table->double('price')->default(0);
            $table->double('delivery_price');
            $table->boolean('availability');
            $table->text('description');
            $table->json('pictures');

            $table->foreignId('category_id')->references('id')->on('product_categories')->cascadeOnDelete();
            $table->foreignId('brand_id')->references('id')->on('brands')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
