<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Consumo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ConsumoTabela', function (Blueprint $table) {
            $table->id();
            $table->string('combustivel');
            $table->string('consumo-viagem');
            $table->string('consumo-km');
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
        Schema::dropIfExists('ConsumoTabela');
    }
}
