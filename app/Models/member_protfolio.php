<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_protfolio extends Model
{
    use HasFactory;
    protected $table ='member_protfolio';
    protected $fillable = [
        'protfolio_id',
        'Member_id',
    ];
}
