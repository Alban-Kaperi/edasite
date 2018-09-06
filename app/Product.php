<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orderdetails()
    {
        return $this->hasMany('App\Orderdetail');
    }
    public function productcollection()
	{
	    return $this->belongsTo('App\ProductCollection');
	}
}
