<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $table ='designs';
    protected $fillable = [
        'name',
        'Client',
        'photo',
        'categorie__design_id',
    ];
    public function categorie_Design(){
        return $this->belongsTo(DesignCategory::class , 'categorie__design_id');
    }
}




