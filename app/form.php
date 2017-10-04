<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
//    protected $table = 'forms';
    protected $primaryKey = 'id';
    protected $fillable=array("name","surname","age");


}
