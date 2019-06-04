<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $table='class';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'couse_id', 'name', 'status'];
    public $timestamps = true;
    public function course()
    {
        return $this->belongsTo('App\Models\Course','couse_id');
    }
}
