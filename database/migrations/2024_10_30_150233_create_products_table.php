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
            $table->bigIncrements('productID');
            $table->unsignedBigInteger('categoryID');
            $table->string('productCode', 255)->nullable();
            $table->string('productName', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('productImage', 255)->nullable();
            $table->decimal('listPrice', 8, 2)->nullable();
            $table->decimal('discountPercent', 8, 2)->nullable();
            $table->timestamps(0);

            $table->foreign('categoryID')->references('categoryID')->on('categories')->onDelete('cascade');
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
