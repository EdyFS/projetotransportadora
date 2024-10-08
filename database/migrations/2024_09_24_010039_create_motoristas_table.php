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
        Schema::create('motoristas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_motorista', 255);
            $table->int('cpf', 11);
            $table->string('telefone', 255);
            $table->string('email', 255);
            $table->string('cidade', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motoristas');
    }
};
