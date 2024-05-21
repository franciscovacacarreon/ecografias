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
        Schema::create('rol', function (Blueprint $table) {
            $table->id('id_rol'); 
            $table->string('nombre', 250);
            $table->tinyInteger('estado'); //0 eliminado, 1 activo
            $table->timestamps(); //created_at, update_at
            $table->unsignedBigInteger('id_forane');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol');
    }
};
