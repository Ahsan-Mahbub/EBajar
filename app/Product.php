<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";
    protected $fillable = ["category", "sub_category", "brand","product_name", "product_quantity", "product_weight","product_size","product_prize", "description", "has_image", "status"];

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('product_name', 'LIKE', '%' . $search . '%');
    }
}
