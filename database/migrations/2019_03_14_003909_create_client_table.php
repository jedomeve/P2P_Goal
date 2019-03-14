<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('client'))
      {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',250);
            $table->string('lastname',250);
            $table->string('phone',15);
            $table->string('address',15);
            $table->string('email',250)->unique();
            $table->int('document_type')->default(1); // 1 (cedula)
            $table->string('document_value')->unique();
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
        Schema::dropIfExists('client');
    }
}
