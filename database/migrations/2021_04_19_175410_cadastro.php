<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cadastro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CadastroTabela', function (Blueprint $table) {
            $table->id();
            $table->string('onibus');
            $table->string('usuario');
            $table->string('email');
            $table->string('cpf');
            $table->string('motorista');
            $table->string('mecanico');
            $table->string('pecas');
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
        Schema::dropIfExists('CadastroTabela');
    }
}
