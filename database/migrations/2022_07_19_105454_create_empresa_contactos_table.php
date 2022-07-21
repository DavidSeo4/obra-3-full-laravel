<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_contactos', function (Blueprint $table) {
            $table->id();
            $table->string('anotacions');
            $table->string('apel1');
            $table->string('apel2');
            $table->integer('cargo');
            $table->date('data');
            $table->string('email')->unique();
            $table->string('nome');
            $table->integer('tfnofixo');
            $table->integer('tfnomovil');
            $table->id('id_empresa');
            $table->id('orientador_id');
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
        Schema::dropIfExists('empresa_contactos');
    }
}
