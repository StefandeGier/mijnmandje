<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class CartController extends Controller
{
    public function addShoppingCart(Request $request, $product_id)
    {
      $qty = $request->input('qty');

      $product = Product::findOrFail($product_id);
      /*
      echo $qty;
      echo "<pre>";
      echo "</pre>";
      echo $product->name;
      echo "<pre>";
      echo $product->description;
      echo "<pre>";
      echo $product->price;
      */
      $order = array(
        'quantity' => $qty,
        'name' => $product->name,
        'description' => $product->description,
        'price' => $product->price
      );

      Session::push('cart', $order);

      dd(session()->all());

      //var_dump($order);
    }
}
