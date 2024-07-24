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
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('cnpj', 18)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('telefone_1', 15);
            $table->string('telefone_2', 15)->nullable();
            $table->date('data_fundacao')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->unsignedBigInteger('representante_id');
            $table->foreign('representante_id')->references('id')->on('representantes')->onDelete('cascade');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
    }
};
