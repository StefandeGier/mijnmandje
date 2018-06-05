<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Products;
use Illuminate\Http\Request;

class OrdersController extends CartController
{
    public function setOrder(Request $request, $order = true)
    {
      $orders = $this->viewCart($request, $order);

      var_dump($orders);
    }
}
