<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensDaVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_da_vendas', function (Blueprint $table) {
            $table->id();
	    $table->integer('valor')->unsigned();
            $table->foreign('id')->references('produto')->on('id');
	    $table->integer('quantidade_vendida')->unsigned();
            $table->foreign('id')->references('produto')->on('id');
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
        Schema::dropIfExists('itens_da_vendas');
    }
}
