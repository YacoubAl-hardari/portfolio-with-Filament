<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SkillsTeche extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['title'];

    protected $table= "skillsteches";

    protected $fillable=
    [
        'title'
        ,'percentage'
        ,'status'
    ];

}
