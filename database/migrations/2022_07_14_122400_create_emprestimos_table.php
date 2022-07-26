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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->string('cliente_cpf',14);

            $table->foreign('cliente_cpf')->references('cpf')->on('clientes');
            $table->id();
            $table->decimal('valor_emprestimo', 10, 2, true)->default(0);
            $table->decimal('taxa_juros', 10, 2)->default(20);
            $table->decimal('valor_pago', 10, 2)->nullable();
            $table->dateTime('data_solicitacao');
            $table->dateTime('data_quitacao')->nullable();
            $table->string('status_emprestimo', 20)->default('SOLICITADO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
};
