<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
  protected $table = 'Orderlines';

  protected $fillable = ['order_id','product_id','qty','price'];



}
