<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasOfertasContratacionCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_ofertas_contratacion_candidatos', function (Blueprint $table) {
            $table->date('datacreacion');
            $table->string('estado');
            $table->id('ofertasformacion_id');
            $table->id('candidato_id');
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
        Schema::dropIfExists('empresas_ofertas_contratacion_candidatos');
    }
}
