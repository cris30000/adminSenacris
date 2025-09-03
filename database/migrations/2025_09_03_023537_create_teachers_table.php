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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');

            //atributos foraneos
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('training_centers_id')->nullable();
            //referenciado las tablas 
            $table->foreign('area_id')
            ->references('id')
            ->on('areas')->onDelete('set null');
            // referenciando la tabla  training centers
            $table->foreign('training_centers_id')
            ->references('id')
            ->on('training_centers')->onDelete('set null');

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
