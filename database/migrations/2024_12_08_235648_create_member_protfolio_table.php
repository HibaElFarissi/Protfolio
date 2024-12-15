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
        Schema::create('member_protfolio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('protfolio_id')->nullable();
            $table->unsignedBigInteger('Member_id')->nullable();
            $table->foreign('protfolio_id')->references('id')->on('protfolios')->onDelete('cascade')->nullable();
            $table->foreign('Member_id')->references('id')->on('Members')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_protfolio');
    }
};
