<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;

    protected $table ='Service_details';

    protected $fillable = [
        'icon',
        'title_Global',
        'title',
        'description',
        'slug',
        'image',
        'longText',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
