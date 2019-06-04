<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   	protected $table='category';
	protected $primaryKey = 'id';
	protected $fillable = ['id','name','status','created_at','updated_at'];
	public $timestamps = false; 
	public function news()
	{
		return $this->hasMany('App\Models\News','id');
	}
}
