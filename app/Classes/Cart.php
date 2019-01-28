<?php

namespace App\Classes;
use Session;
use App\Order;
use App\Orderline;
use App\Product;
use Auth;

class Cart
{
    public function __construct() {

    }

    public function add($request, $update = false)
    {

      // check if use the update or add
      if ($update == false) {
        $product_id = $request->input('product_id');
        $qty =  $request->input('qty');
      }else{
        $product_id = $request['product_id'];
        $qty = $request['qty'];

      }
      // check if qty not is -
      if ($qty != 0) {
        //update functie
        $shopCart = Session::get('cart');
        if ($shopCart) {

          foreach ($shopCart as $key => $item) {
            // getting the orderline
            if ($product_id == $item['product_id']) {
              // if customer add product by not updating
              if ($update == false) {
                $oldProduct = $item['qty'];
                $qty = $oldProduct + $qty;

              }
              //delete orderline
              Session::forget('cart.' .$key);
            }
          }
        }

        //renew orderline
        $storedItem = ['qty' => $qty, 'product_id' => $product_id];
        //add the renew orderline
        Session::push('cart', $storedItem);

        }else {
          $request->session()->flash('status_cart_error', "Can't add product with quantity of zero.");
        }
        return true;
    }

    public function viewCart()
    {
      $products = array();
      $shopCart = Session::get('cart');

      // check if not empty
      if(Session::has('cart') &&  empty(!$shopCart)) {

        foreach ($shopCart as $item) {

          $product = Product::find($item['product_id']);

          $totalPrice = $item['qty'] * $product['price'];

          $cartProducts[] = ['id' => $item['product_id'], 'name' => $product['name'] ,'price' => $totalPrice, 'qty' => $item['qty']];

        }
        return $cartProducts;
      }
      return false;
    }

    public function deleteItem($product_id)
    {
      $shopCart = Session::get('cart');
      //search the item what must be deleted
      foreach ($shopCart as $key => $item) {
        if ($product_id == $item['product_id']) {
          Session::forget('cart.' .$key);
        }
      }
      return true;
    }

    public function updateItem($request)
    {
      $product_id = $request->input('product_id');
      $qty =  $request->input('qty');

      for ($i=0; $i < count($product_id); $i++) {
        //delete item if qty is 0
        if ($qty[$i] == 0) {
          $this->deleteItem($product_id[$i]);
        }
          else {
            //updating the item
            $productArr = array(
              'product_id' => $product_id[$i],
              'qty' => $qty[$i]
            );
            $product = $this->add($productArr, $update = true);
          }
      }
    }

    public function addOrder($orders)
    {
      $user = Auth::user()->id;

      //insert orderInfo to database
      $data = Order::create(['user_id'=> $user]);

      foreach ($orders as $order) {

        // add orderline
        $orderLine = ['order_id' =>  $data['id'], 'product_id' => $order['id'],'price' => $order['price'], 'qty' =>  $order['qty'] ];
        Orderline::create($orderLine);
      }
      Session::forget('cart');

      return true;
    }

}
