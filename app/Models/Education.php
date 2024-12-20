<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';

    protected  $fillable = [
        'name_school',
        'specialty',
        'Start_Date',
        'End_Date',
        'description',
    ];
}
