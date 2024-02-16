<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidatos', function (Blueprint $table) {
                $table->id();
                $table->string('nome');
                $table->string('telefone');
                $table->string('email');
                $table->string('endereco');
                $table->string('bairro');
                $table->string('cidade');
                $table->string('uf');
                $table->string('limite_credito');
                $table->string('data_analise_credito');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
