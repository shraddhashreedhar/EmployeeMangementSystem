<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leaveapp extends Model
{
    protected $table='leaveapp';

   protected $fillable=['Ename','Eid','Type','From','To','Description'];

   protected $Primarykey='id';
}
