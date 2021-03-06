<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   	protected $table='category';

	protected $primaryKey = 'id';

	protected $fillable =
        [
            'id',
            'title',
            'name',
            'status',
            'parent_id',
            'created_at',
            'updated_at'
        ];

	public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function news()
	{
		return $this->hasMany(News::class,'id');
	}
}
