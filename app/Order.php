<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Orders';

    protected $fillable = ['user_id'];

    public function orders($test)
    {
      return $test;
    }
}
