<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Classes\Cart;

use Session;

class CartController extends Controller
{
    public function addShoppingCart(Request $request)
    {

      $product_id = $request->input('product_id');
      $qty =  $request->input('qty');

      $cart = new Cart();
      $product = $cart->add($product_id, $qty);

      Session::push('cart', $product);
      Session::save();

      //dd(Session::get('cart'));

      return view('/welcome');



    }
}
