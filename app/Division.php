<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = "divisions";
  	protected $primaryKey = "division_id";
  	protected $fillable = ["division_name", "status"];

  	public function validation()
  	{
  		return [
          'division_name' => 'required',
      	];
  	}


	public function scopeSearch($query, $search)
  	{
      	return $query->where('division_name', 'LIKE', '%' . $search . '%');
     }

    public function scopeActive($query)
  	{
  	  	$query->where("status", 1);
  	}
}
