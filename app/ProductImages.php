<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = "product_images";
    protected $primaryKey = "product_image_id";
    protected $fillable = ["product_id", "images", "status"];

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
