<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headmasters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->date('birthday');
            $table->enum('sex', ['Masculino', 'Femenino']);
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
        Schema::dropIfExists('headmasters');
    }
}
