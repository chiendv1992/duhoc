<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
   	protected $table='new';
	protected $primaryKey = 'id';
	protected $fillable = ['id','cate_id','title','slug','content','image','status','type'];
	public $timestamps = false; 
	public function category()
	{
		return $this->belongsTo('App\Models\Category','cate_id');
	}
}
