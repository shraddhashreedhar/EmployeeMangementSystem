<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internship extends Model
{
    protected $table='internship';

   protected $fillable=['name','college','course','email','contact'];

   protected $Primarykey='id';
}
