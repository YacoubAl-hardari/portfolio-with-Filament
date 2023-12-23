<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['name'];

    protected $table= "contact_us";

    protected $fillable=
    [
        'name'
        ,'image'
        ,'data'
    ];

    protected $casts = ['data'=>'json'];
}
