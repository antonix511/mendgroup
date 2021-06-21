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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('catalogue', 15)->index();
            $table->string('lot', 15)->index();
            $table->integer('holes')->nullable();
            $table->integer('size')->nullable();
            $table->unsignedBigInteger('unit_size_id')->nullable();
            $table->string('brand');
            $table->string('origin');
            $table->text('observation');
            $table->text('image')->nullable();
            $table->foreign('unit_size_id')->references('id')->on('unit_size');
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
