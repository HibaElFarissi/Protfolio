<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    use HasFactory;

    protected  $table = 'infos';

    protected $fillable = [
        'name',
        'job',
        'description',
        'image1',
        'image2',
        'facebook',
        'github',
        'instagram',
        'linkedin',
        'yearsExp',
        'email',
        'phoneNumber',
    ];
}
