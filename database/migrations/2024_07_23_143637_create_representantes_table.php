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
        Schema::create('representantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('cep', 10);
            $table->string('logradouro', 50);
            $table->string('numero', 20);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->char('uf', 2);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representantes');
    }
};
