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
        Schema::table('cargas', function (Blueprint $table) {
            $table->string('nomeCarga', 255);
            $table->string('peso', 255);
            $table->string('tamanho', 255);
            $table->string('fragilidade', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cargas', function (Blueprint $table) {
            $table->string('nomeCarga', 255);
            $table->string('peso', 255);
            $table->string('tamanho', 255);
            $table->string('fragilidade', 255);
        });
    }
};