<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Client',
        'url_video',
        'code_video',
        'categorie__video_id',
    ];
    public function categorie_Video(){
        return $this->belongsTo(VideoCategory::class,'categorie__video_id');
    }
}
