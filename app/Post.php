<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
	public $timestamps = false;
  
    public function getCategory()
    {
    	return $this -> belongsTo('App\Category','category_id','id');
    }
}
