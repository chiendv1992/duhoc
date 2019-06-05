<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='course';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','status'];
    public $timestamps = false;

    public function lop()
    {
        return $this->hasMany('App\Models\Lop','id');
    }
}
