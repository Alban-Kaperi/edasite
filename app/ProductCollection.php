<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCollection extends Model
{
    
	public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function category()
	{
	    return $this->belongsTo('App\Category');
	}
 
}
