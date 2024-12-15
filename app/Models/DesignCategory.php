<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignCategory extends Model
{
    use HasFactory;

    protected $table='design_categories' ;

    protected $fillable =[
        'name',
    ];

    public function design(){
        return $this->hasMany(Design::class, "categorie__design_id");
    }
}
