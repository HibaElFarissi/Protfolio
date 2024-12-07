<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $fillable = [
        'name',
        'image',
        'skillsType_id',
    ];

    public function skillsType(){
        return $this->belongsTo(Skills_type::class , 'skillsType_id');
    }
}
