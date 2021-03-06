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
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('country');
            $table->string('local');
            $table->string('date');
            $table->string('time');
            $table->string('interest');
            $table->decimal('lat', 10, 8);
            $table->decimal('long', 11, 8);
            $table->boolean('status');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**'
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
