<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orderline;
use App\Product;
use Auth;
use Session;
use Illuminate\Http\Request;

class OrdersController extends CartController
{
    public function setOrder($order = true)
    {
      $orders = $this->viewCart($order);

      //add order
      $user = Auth::user()->id;

      //insert orderInfo to database
      $data = Order::create(['user_id'=> $user]);

      //dd($data);

      foreach ($orders as $order) {

        // add orderline
        $orderLine = ['order_id' =>  $data['id'], 'product_id' => $order['id'],'price' => $order['price'], 'qty' =>  $order['qty'] ];
        Orderline::create($orderLine);
      }
      Session::forget('cart');

      return view ('/orders');

    }
}
