<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaDeComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_publicacao');
            $table->foreignId('id_criador');
            $table->string('nome_criador');
            $table->text('texto');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_criador')->references('id')->on('users');
            $table->foreign('id_publicacao')->references('id')->on('publicacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign(['id_criador']);
            $table->dropForeign(['id_publicacao']);
        });

        Schema::dropIfExists('comentarios');
    }
}
