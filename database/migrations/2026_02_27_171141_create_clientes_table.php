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
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('cpf')->unique(); // Recomendo unique para evitar CPFs duplicados
        $table->string('email')->unique(); // Campo que estava faltando!
        $table->string('telefone');
        $table->string('endereco'); // Campo que estava faltando!
        // Se o campo 'reserva' for necessário, mantenha-o, 
        // mas ele precisará estar no formulário também.
        // $table->integer('reserva')->default(0); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
