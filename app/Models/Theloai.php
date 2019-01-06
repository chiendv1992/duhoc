<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    protected $table='theloai';
    protected $primaryKey = 'id';

    protected $fillable = ['id','name','status'];

    public $timestamps = false;
    public function loaitin()
    {
        return $this->hasMany('App\Models\Loaitin','id');
    }
}
