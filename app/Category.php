<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "category_id";
    protected $fillable = ["category_name","status"];

    public function validation()
    {
        return [
            'category_name' => 'required',
        ];
    }

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }}
