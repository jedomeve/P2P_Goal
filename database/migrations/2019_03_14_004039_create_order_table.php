<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('order'))
      {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('reference')->unique();
            $table->integer('client');
            $table->integer('state')->default(1); // 1 - emitida
            $table->foreign('client')
                  ->references('client')
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
        Schema::dropIfExists('order');
    }
}
