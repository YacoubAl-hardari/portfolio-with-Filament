<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SoicalMedai extends Model
{
    use HasFactory;


    protected $table= "soical_medais";

    protected $fillable=
    [
        'email'
        ,'phone'
        ,'location'
        ,'social_links'
    ];

    protected $casts = ['social_links'=>'array'];
}
