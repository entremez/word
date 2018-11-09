<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ose');
            $table->string('ocp');
            $table->string('cliente');
            $table->string('modelo');
            $table->string('lote');
            $table->string('di');
            $table->string('certificado');
            $table->string('seguimiento');


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
        Schema::dropIfExists('certificados');
    }
}
