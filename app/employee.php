<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
     protected $table='employee';

   protected $fillable=['First_name','Last_name','Employee_id','email','password'];

   protected $Primarykey='id';
}
