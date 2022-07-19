<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaOfertasFormacionCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_ofertas_formacion_candidatos', function (Blueprint $table) {

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
        Schema::dropIfExists('empresa_ofertas_formacion_candidatos');
    }
}
