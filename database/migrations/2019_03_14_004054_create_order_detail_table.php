<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('order_detail'))
      {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('cant');
            $table->double('price_unit');
            $table->double('total_taxes');
            $table->double('total_price');
            $table->double('total');
            $table->integer('state');
            $table->foreign('order_id')
                  ->references('order')
                  ->on('id');
            $table->foreign('product_id')
                  ->references('product')
                  ->on('id');
            $table->timestamps();
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
        Schema::dropIfExists('order_detail');
    }
}
