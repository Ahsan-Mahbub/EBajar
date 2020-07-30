<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brands";
    protected $primaryKey = "brand_id";
    protected $fillable = ["brand_name", "status"];

    public function scopeSearch($query, $search)
    {
        return $query->where('brand_name', 'LIKE', '%' . $search . '%');
    }

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
