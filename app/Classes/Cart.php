<?php

namespace App\Classes;
use Session;

class Cart
{
    //public $items = array();

    public function add($product_id, $qty)
    {

      $shopCart = Session::get('cart');
      //array_key_exists($product_id, $shopCart[$i]
      if ($shopCart) {

        foreach ($shopCart as $item) {
          if ($product_id == $item['product_id']) {
            for ($i=0; $i < count($item) ; $i++) {

            $oldProduct = $item['qty'];
            $qty = $oldProduct + $qty;

            Session::forget('cart.' .$i);


            }
          }
        }
      }
      $storedItem = ['qty' => $qty, 'product_id' => $product_id];


      return $storedItem;

    }


    public function showCart($products, $shopCart)
    {
      if ($products && $shopCart == true) {


          /*for ($i=0; $i < count($shopCart); $i++) {

            $totalprice = $shopCart[$i]['qty'] * $products[$i]['price'];

            $storedItem = ['id' => $shopCart[$i]['product_id'],'name' => $products[$i]['name'],'price' => $totalprice, 'qty' => $shopCart[$i]['qty']];
            $this->items[] = $storedItem;
          }
          */

          /*foreach ($products as $product) {
            foreach ($shopCart as $item) {

              $id = key($product);
              $id1 = key($item);
              $totalprice = $item[$id1]['qty'] * $product[$id]['price'];

              $storedItem = ['id' => $item[$id1]['product_id'],'name' => $product[$id]['name'],'price' => $totalprice, 'qty' => $item[$id1]['qty']];


            //var_dump($product[key($product)]['name']);
            //var_dump($item[key($item)]['qty']);

            }
          }*/
          foreach ($shopCart as $item) {
            foreach ($products as $product) {
            $id = key($item);
            $id2 = key($product);

            //var_dump($product[$id]['name']);
            //var_dump($item[$id]['qty']);
            $test = ['test1' => $product[$id2]['name'], 'test2' => $item[$id]['qty']];
            $items = $test;

            }
          }
            return $items;


    }

  }
}
