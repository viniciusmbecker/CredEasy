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
        Schema::create('users', function (Blueprint $table) {
            $table->string('cpf', 14)->primary();
            $table->string('nome', 255);
            $table->decimal('renda', 10, 2);
            $table->string('endereco', 255);
            $table->string('profissao', 255);
            $table->string('telefone', 14);
            $table->string('email', 255);
            $table->string('senha', 255);
            $table->string('tipo_usuario', 10)->default('CLIENTE');
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
