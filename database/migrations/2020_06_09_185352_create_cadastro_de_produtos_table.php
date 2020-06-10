<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroDeProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_de_produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descrição');
            $table->float('valor');
            $table->int('quantidade_em_estoque');
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
        Schema::dropIfExists('cadastro_de_produtos');
    }
}
