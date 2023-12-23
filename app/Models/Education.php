<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['title','educationName','small_desctiption'];

    protected $table= "educations";

    protected $fillable=
    [
        'title'
        ,'educationName'
        ,'date'
        ,'small_desctiption'
        ,'status'
    ];

}
