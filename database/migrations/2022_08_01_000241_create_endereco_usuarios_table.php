<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_usuarios', function (Blueprint $table) {

            $table->id();

            $table -> integer('cep');
            $table -> integer('numero');
            $table -> string('rua', 150);
            $table -> string('bairro', 150);
            $table -> string('cidade', 30);
            $table -> string('estado');

            $table -> unsignedBigInteger('id_usuario');
            $table -> foreign('id_usuario')->references('id')->on('usuarios');

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
        Schema::dropIfExists('endereco_usuarios');
    }
};
