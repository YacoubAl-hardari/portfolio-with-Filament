<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
       use HasFactory,HasTranslations;

    public $translatable = ['name','description','tags'];

    protected $table= "projects";

    protected $fillable=
    [
        'category_id'
        ,'name'
        ,'description'
        ,'tags'
        ,'url'
        ,'images'
        ,'status'
    ];

    protected $casts = ['tags'=>'array'];

    // create relationship with categories
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
