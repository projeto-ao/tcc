<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaDoMural extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murals', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->foreignId('id_criador');
            $table->text('texto');
            $table->text('imagem')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_criador')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('murals', function (Blueprint $table) {
            $table->dropForeign(['id_criador']);
        });

        Schema::dropIfExists('murals');
    }
}
