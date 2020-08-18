<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $table = "sub_categories";
  protected $primaryKey = "sub_category_id";
  protected $fillable = ["sub_category_name", "category_name", "status"];

 public function validation()
 {
     return [
         'sub_category_name' => 'required',
         'category_name' => 'required',
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
