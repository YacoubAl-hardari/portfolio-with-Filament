<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutMe extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['title','description'];

    protected $table= "about_mes";

    protected $fillable=
    [
        'title'
        ,'description'
        ,'tags'
        ,'image'
        ,'cv'
    ];

    protected $casts = ['tags'=>'array'];


}
