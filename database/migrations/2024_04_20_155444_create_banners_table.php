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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->longText('bannerContact')->nullable();
            $table->longText('bannerAbout')->nullable();
            $table->longText('bannerClient')->nullable();
            $table->longText('bannerTestimonials')->nullable();
            $table->longText('bannerService')->nullable();
            $table->longText('bannerServiceDetail')->nullable();
            $table->longText('bannerProject')->nullable();
            $table->longText('bannerBlog')->nullable();
            $table->longText('bannerBlogDetail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
