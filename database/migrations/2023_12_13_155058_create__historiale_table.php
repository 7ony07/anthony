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
        Schema::create('_historiale', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_Operacion');
            $table->text('Operando');
            $table->double('resultado');
            
            
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_historiale');
    }
};
