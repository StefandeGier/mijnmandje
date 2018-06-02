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
      $cartProducts = array();

      if($request->session()->has('cart')) {
        $shopCart = Session::get('cart');

        foreach ($shopCart as $item) {
          array_push($cartProducts, Product::find(key($item)));
          //$cartProducts->append('fourth');
          //array_push($cartProducts, Product::find(key($item)));
        }

        //var_dump($shopCart);
        var_dump($cartProducts);
        //var_dump($product_id['product_id']);

        //echo $qty;
        //return view('tasks/edit',compact('task'));
        return view('/cart')->with('cartProducts', $cartProducts);
        //exit;
      }
      return view('/cart');

    }

}
