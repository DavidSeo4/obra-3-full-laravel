<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaOfertasFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_ofertas_formacion', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('datadende');
            $table->date('dataata');
            $table->string('lugar');
            $table->string('tipo');
            $table->integer('numprazas');
            $table->integer('numhoras');
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
        Schema::dropIfExists('empresa_ofertas_formacions');
    }
}
