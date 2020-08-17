<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $primaryKey='color_id';
    protected $fillable=['color_name' , 'status'];
}
