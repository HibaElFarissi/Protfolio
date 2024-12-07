<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_vision extends Model
{
    use HasFactory;
    protected $table = 'service_visions';

    protected $fillable = [
        'name',
    ];

}
