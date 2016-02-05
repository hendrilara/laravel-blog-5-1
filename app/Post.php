<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Post extends Model 
{
    protected $table = 'post';

    protected $fillable = [];

    public function author()
	{
		return $this->belongsTo('App\User','author_id');
	}

	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}
}
