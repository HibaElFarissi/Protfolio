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
        'slug',
        'text1',
        'text2',
        'quote',
        'text3',
        'image1',
        'image2',
        'image3',
        'status',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Categorie(){
        return $this->belongsTo(Categorie::class, 'Categorie_id');
    }
}
