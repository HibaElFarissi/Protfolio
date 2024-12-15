<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'Title_Global',
        'text1',
        'text2',
        'image1',
        'image2',
        'image3',
        'ArticleCategorie_id',
        'user_id',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Categorie(){
        return $this->belongsTo(ArticleCategory::class, 'ArticleCategorie_id');
    }

}
