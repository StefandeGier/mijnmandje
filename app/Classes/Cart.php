<?php

namespace App\Classes;
use Session;

class Cart
{
  
    public function add($product_id, $qty, $update = false)
    {

      $shopCart = Session::get('cart');
      //array_key_exists($product_id, $shopCart[$i]
      if ($shopCart) {

        foreach ($shopCart as $key => $item) {
          if ($product_id == $item['product_id']) {

            if ($update == false) {
              // code...
              $oldProduct = $item['qty'];
              $qty = $oldProduct + $qty;

            }


            Session::forget('cart.' .$key);

          }
        }
      }
      $storedItem = ['qty' => $qty, 'product_id' => $product_id];


      return $storedItem;

    }

}
