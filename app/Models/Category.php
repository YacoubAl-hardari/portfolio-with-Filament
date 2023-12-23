<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['name'];

    protected $table= "categories";

    protected $fillable=
    [
        'name'
        ,'status'
    ];


    public function projects()
    {
        return $this->belongsTo(Project::class,'id','category_id');
    }

    protected $casts = ['tags'=>'array'];
}
