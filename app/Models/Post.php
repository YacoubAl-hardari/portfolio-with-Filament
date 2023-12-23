<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['name','samll_description','long_description'];

    protected $table= "posts";

    protected $fillable=
    [
        'user_id'
        ,'post_category_id'
        ,'name'
        ,'samll_description'
        ,'long_description'
        ,'date'
        ,'images'
        ,'url'
        ,'status'
    ];

    function users() {
        return $this->belongsTo(User::class,'user_id');
    }

    function post_categories() {
        return $this->belongsTo(PostCategorie::class,'post_category_id');
    }


}
