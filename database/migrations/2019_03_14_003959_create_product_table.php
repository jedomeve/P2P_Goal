<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('product'))
      {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('name');
            $table->text('description');
            $table->integer('category');
            $table->mediumText('url_photo');
            $table->double('price');
            $table->timestamps();
            $table->foreign('category')
                  ->references('product_categories')
                  ->on('id');
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
