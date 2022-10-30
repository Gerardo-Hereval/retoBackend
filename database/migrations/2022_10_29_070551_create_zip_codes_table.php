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
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->string('zip_code');
            $table->string('asentamiento');
            $table->string('tipo_asentamiento');
            $table->string('municipio');
            $table->string('entidad');
            $table->string('ciudad');
            $table->string('cp_admin_postal');
            $table->string('clave_entidad');
            $table->string('cp_admin_postal_entidad');
            $table->string('cp_vacio');
            $table->string('clave_tipo_asentamiento');
            $table->string('clave_municipio');
            $table->string('identificador_uni_asent');
            $table->string('zona_ubi_asent');
            $table->string('clave_ciudad');
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
        Schema::dropIfExists('zip_codes');
    }
};
