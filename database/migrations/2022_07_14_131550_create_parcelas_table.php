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
        Schema::create('parcelas', function (Blueprint $table) {

            $table->foreignId('emprestimo_id')->constrained();
            $table->id();
            $table->decimal('valor_parcela', 10, 2);
            $table->integer('numero_parcela');
            $table->dateTime('data_vencimento');
            $table->dateTime('data_pagamento')->nullable();
            $table->decimal('multa', 10, 2)->nullable();
            $table->decimal('valor_pago', 10, 2)->nullable();
            $table->string('status', 20)->default('ABERTA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcelas');
    }
};
