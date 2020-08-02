<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brands";
  	protected $primaryKey = "brand_id";
  	protected $fillable = ["brand_name", "description", "status"];

  	public function validation()
  	{
  		return [
          'brand_name' => 'required',
          'description' => 'required',
      	];
  	}


	public function scopeSearch($query, $search)
  	{
      	return $query->where('sub_category_name', 'LIKE', '%' . $search . '%');
     }

    public function scopeActive($query)
  	{
  	  	$query->where("status", 1);
  	}
}
