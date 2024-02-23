<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsForm extends Model
{
    use HasFactory;
    protected $table = "contact_us_form";

    protected $fillable = ['name','last_name','email','message','status'];
}
