<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protfolio_tag extends Model
{
    use HasFactory;
    protected $table ='protfolio_tag';
    protected $fillable = [
        'protfolio_id',
        'tag_id',
    ];
}
