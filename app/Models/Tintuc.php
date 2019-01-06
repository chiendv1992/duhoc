<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    protected $table = 'tintuc';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'loaitin_id', 'title', 'slug', 'content', 'image','status', 'type'];

    public $timestamps = false;

    public function loaitin()
    {
        return $this->belongsTo('App\Models\Loaitin','loaitin_id');
    }
}
