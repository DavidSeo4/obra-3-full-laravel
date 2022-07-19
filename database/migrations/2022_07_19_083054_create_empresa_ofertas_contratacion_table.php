<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaOfertasContratacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_ofertas_contratacion', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->integer('nummeses');
            $table->integer('numpostosofertados');
            $table->string('observacions');
            $table->string('posto');
            $table->id('accionsfe_id');
            $table->id('id_empresa');
            $table->id('categoriaprofesional_id');
            $table->string('estudosminimos');
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
        Schema::dropIfExists('empresa_ofertas_contratacions');
    }
}
