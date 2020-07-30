<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = "sliders";
  protected $primaryKey = "slider_id";
  protected $fillable = ["slider_name", "description", "image", "status"];

  public function validation()
    {
      return [
          'slider_name' => 'required',
          'description' => 'required',
          'image' => 'required',
      ];
    }

  public function scopeSearch($query, $search)
  {
      return $query->where('slider_name', 'LIKE', '%' . $search . '%');
  }

  public function scopeActive($query)
  {
      $query->where("status", 1);
  }
}
