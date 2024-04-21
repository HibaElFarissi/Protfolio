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
            $table->string('bannerContact');
            $table->string('bannerAbout');
            $table->string('bannerClient');
            $table->string('bannerTestimonials');
            $table->string('bannerService');
            $table->string('bannerServiceDetail');
            $table->string('bannerProject');
            $table->string('bannerBlog');
            $table->string('bannerBlogDetail');
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
