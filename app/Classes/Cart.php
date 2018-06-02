<?php

namespace App\Classes;
use Session;

class Cart
{
    public $items = array();

    public function add($product_id, $qty)
    {

          $shopCart = Session::get('cart');

            if ($shopCart == true) {
              for ($i=0; $i < count($shopCart); $i++) {
                if (array_key_exists($product_id, $shopCart[$i])) {
                    $oldProduct = $shopCart[$i][$product_id]['qty'];
                    $qty = $oldProduct + $qty;
                    session()->pull('cart.'.$i);
                }
              }
            }

            $storedItem = ['qty' => $qty, 'product_id' => $product_id];

            $this->items[$product_id] = $storedItem;

            return $this->items;

    }


    public function showCart($cartProducts, $shopCart)
    {

    }


}
