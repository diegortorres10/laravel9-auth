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
        Schema::create('rubro_comuna_documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rubro_id');
            $table->unsignedBigInteger('comuna_id');
            $table->unsignedBigInteger('documento_id');
            $table->timestamps();

            $table->foreign('rubro_id')
                ->references('id')
                ->on('rubros')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('comuna_id')
                ->references('id')
                ->on('comunas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('documento_id')
                ->references('id')
                ->on('documentos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubro_comuna_documentos');
    }
};
