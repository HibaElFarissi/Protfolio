<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills_type extends Model
{
    use HasFactory;

    protected $table = 'skills_types';

    protected $fillable = [
        'name',
    ];

    public function skills(){
        return $this->hasMany(Skills::class);
    }
}
