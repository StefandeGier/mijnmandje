<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orderline;
use App\Product;
use DB;
use Auth;
use Session;
use App\Classes\Cart;
use Illuminate\Http\Request;

class OrdersController extends CartController
{
    public function setOrder($order = true)
    {
      $orders = $this->viewCart($order);

      //add order
      $cart = new Cart();
      $addOrder = $cart->addOrder($orders);

      return view ('/orders');

    }
    
}
