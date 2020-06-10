<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroDeClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_de_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf', 20)->unique();
            $table->string('cnpj', 20)->unique();
            $table->date('data_do_cadastro');
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
        Schema::dropIfExists('cadastro_de_clientes');
    }
}
