<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['title','small_description'];

    protected $table= "services";

    protected $fillable=
    [
        'title'
        ,'small_description'
        ,'image'
        ,'status'
    ];

}
