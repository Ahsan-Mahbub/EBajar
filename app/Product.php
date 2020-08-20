<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";
    protected $fillable = ["category", "sub_category", "brand","product_name", "product_prize", "description", "has_image", "status"];
///////////////jubaircode//////////////
    public function category()
    {
        return $this->belongsTo(Category::class, "category");
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, "sub_category");
    }

    // public function brand()
    // {
    //     return $this->belongsTo(Brand::class, "brand");
    // }
    ///////////////codeend//////////////

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('product_name', 'LIKE', '%' . $search . '%');
    }
}
