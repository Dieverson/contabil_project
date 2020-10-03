<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id('idgrupos');
            $table->string('numero_da_conta');
            $table->unsignedBigInteger('natureza_idnatureza');
            $table->string('nome_da_conta');
            $table->timestamps();
            $table->foreign('natureza_idnatureza')->references('idnatureza')->on('naturezas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
