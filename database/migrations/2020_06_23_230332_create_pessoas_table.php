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

            $table->string('matricula');
            $table->string('funcao');
            $table->string('tel_fixo');
            $table->string('tel_movel');

            $table->timestamps();


            $table->unsignedBigInteger('user_id'); //chave estrangeira user
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('setor_id'); //chave estrangeira setor
            $table->foreign('setor_id')->references('id')->on('setors');


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
