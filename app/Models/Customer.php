<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
	protected $primaryKey = 'id';
	protected $fillable = ['id','class_id','code','pass','fullname','image','birthday','address','phone','cmtnd','type','status','created_at','updated_at'
];
	public $timestamps = false; 
}
