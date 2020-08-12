<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $table = "sub_districts";
    protected $primaryKey = "sub_district_id";
    protected $fillable = ["sub_district_name","district_name", "status"];

    public function validation()
    {
        return [
            'sub_district_name' => 'required',
        ];
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('sub_district_name', 'LIKE', '%' . $search . '%');
    }

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
