<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {

            $table->bigIncrements('id'); //chave primária
            $table->unsignedBigInteger('user_id'); //chave estrangeira user
            $table->unsignedBigInteger('setor_id')->unsigned(); //chave estrangeira setor

            $table->string('matricula');
            $table->string('nome');
            $table->string('funcao');
            $table->string('tel_fixo');
            $table->string('tel_movel');

            $table->timestamps();

            $table->foreign('setor_id')->references('id')->on('setors')
           ->onUpdate('cascade')
           ->onDelele('cascade');

            //$table->foreign('user_id')->references('id')->on('users')
           //->onUpdate('cascade')
           //->onDelele('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
