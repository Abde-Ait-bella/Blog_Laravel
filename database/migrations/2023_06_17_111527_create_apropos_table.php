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
        Schema::create('apropos', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('telephone');
            $table->string('sous_titre');
            $table->string('titre');
            $table->text('description');
            $table->string('element_1');
            $table->string('element_2');
            $table->string('element_3');
            $table->integer('annees_experience');
            $table->string('image');
            $table->string('chiffre_1');
            $table->string('titre_1');
            $table->string('chiffre_2');
            $table->string('titre_2');
            $table->string('chiffre_3');
            $table->string('titre_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apropos');
    }
};
