<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'bannerAbout',
        'bannerClient',
        'bannerTestimonials',
        'bannerService',
        'bannerServiceDetail',
        'bannerProject',
        'bannerBlog',
        'bannerBlogDetail',
        'bannerContact',
    ];
}
