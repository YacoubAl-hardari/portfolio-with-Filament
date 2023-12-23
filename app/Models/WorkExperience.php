<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkExperience extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['title','experienceName','small_desctiption'];

    protected $table= "work_experiences";

    protected $fillable=
    [
        'title'
        ,'experienceName'
        ,'date'
        ,'small_desctiption'
        ,'status'
    ];

}
