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
            $table->string('image')->nullable();
            $table->string('titre1')->default('Ivor Herbert');
            $table->string('sous_titre1')->default('Manager, Airlines');
            $table->string('texte1')->default('Sit amet consectetur adipi scey elit Condimentum quam nun facilisis condim entum pellentesque sapien quis tincidunt pulvinar non sem nisle eget enim elit. Imperdiet venenatis sed libero lectus sed cursus ');
            $table->string('titre2')->default('Ivor Herbert');
            $table->string('sous_titre2')->default('Manager, Airlines');
            $table->string('texte2')->default('Sit amet consectetur adipi scey elit Condimentum quam nun facilisis condim entum pellentesque sapien quis tincidunt pulvinar non sem nisle eget enim elit. Imperdiet venenatis sed libero lectus sed cursus ');;
            $table->string('titre3')->default('Ivor Herbert');
            $table->string('sous_titre3')->default('Manager, Airlines');
            $table->string('texte3')->default('Sit amet consectetur adipi scey elit Condimentum quam nun facilisis condim entum pellentesque sapien quis tincidunt pulvinar non sem nisle eget enim elit. Imperdiet venenatis sed libero lectus sed cursus ');;
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
