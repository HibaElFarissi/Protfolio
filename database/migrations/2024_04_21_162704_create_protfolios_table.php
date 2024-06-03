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
        Schema::create('protfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->string('Link_website');
            $table->string('Client');
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->string('images')->nullable();
            $table->unsignedBigInteger('Categorie_id')->index();
            $table->foreign('Categorie_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protfolios');
    }
};
