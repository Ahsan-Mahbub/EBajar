<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upzilla extends Model
{
    protected $table = "upzillas";
    protected $primaryKey = "upzilla_id";
    protected $fillable = ["upzilla_name","district_name", "description", "status"];

    public function validation()
    {
        return [
            'upzilla_name' => 'required',
            'description'   => 'required',
        ];
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('upzilla_name', 'LIKE', '%' . $search . '%');
    }

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
