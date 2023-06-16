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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->string('titre1');
            $table->string('sous_titre1');
            $table->string('texte1');
            $table->string('titre2');
            $table->string('sous_titre2');
            $table->string('texte2');
            $table->string('titre3');
            $table->string('sous_titre3');
            $table->string('texte3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};
