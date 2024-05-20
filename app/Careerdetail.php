<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Careerdetail extends Model
{
    public $fillable = ['name','email','phone','address','cv','message','application_name','country'];
}
