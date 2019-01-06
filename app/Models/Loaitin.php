<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaitin extends Model
{
    protected $table='loaitin';
    protected $primaryKey = 'id';

    protected $fillable = ['id','theloai_id','name','status'];

    public $timestamps = false;

    public function theloai()
    {
        return $this->belongsTo('App\Models\TheLoai','theloai_id');
    }
    public function tintuc()
    {
        return $this->hasMany('App\Models\Tintuc','id');
    }
}
