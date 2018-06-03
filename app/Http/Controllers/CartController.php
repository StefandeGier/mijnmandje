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

    public function viewCart(Request $request)
    {
      $products = array();

      if($request->session()->has('cart')) {
        $shopCart = Session::get('cart');

        foreach ($shopCart as $item) {
          $product = Product::find(key($item));
          $products[key($item)] = $product;
        }


          //prototype//
        $cartView = new Cart();
        $cartItems = $cartView->showCart($products, $shopCart);
        echo "<pre>";
        //var_dump($products[1]['id']);
        echo "</pre>";

        echo "<pre>";
        //var_dump($shopCart[0][1]['qty']);
        echo "</pre>";

        echo "<pre>";
        var_dump($cartItems);
        echo "</pre>";

        //return view('/cart')->with('cartItems', $cartItems);
        //exit;
      }
      return view('/cart');

    }

}
