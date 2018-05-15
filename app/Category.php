<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Product;

class Category extends Model
{
  protected $table = 'categories';
    //
    public function products()
    {
      return $this->belongsToMany('App\Product', 'categories_products');
      //return Product::All();
    }
}
