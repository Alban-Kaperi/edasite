<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('collection_id')->nullable()->unsigned();            
            $table->string('title');
            $table->text('description')->nullable();
            $table->double('quantity');
            $table->double('price', 15);
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->string('measurment')->nullable();

            $table->string('imagePath')->nullable();
            $table->string('imagesPath')->nullable();
            
            
            $table->timestamps();
            $table->foreign('collection_id')->references('id')->on('product_collections');
        });
        Schema::enableForeignKeyConstraints();
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
