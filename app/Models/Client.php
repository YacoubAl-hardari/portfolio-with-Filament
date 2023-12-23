<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['name','commnet','client_job'];

    protected $table= "clients";

    protected $fillable=
    [
        'name'
        ,'commnet'
        ,'client_job'
        ,'image'
    ];

}
