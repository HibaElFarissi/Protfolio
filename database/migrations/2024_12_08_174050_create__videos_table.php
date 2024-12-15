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
        Schema::create('Videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Client')->nullable();
            $table->longText('url_video')->nullable();
            $table->longText('code_video')->nullable();
            $table->unsignedBigInteger('categorie__video_id')->index();
            $table->foreign('categorie__video_id')->references('id')->on('video_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Videos');
    }
};
