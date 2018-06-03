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
      //Session::save();

      //dd(Session::get('cart'));

      return view('/welcome');

    }

    public function viewCart(Request $request)
    {
      $products = array();
      $shopCart = Session::get('cart');
      if($request->session()->has('cart')) {
        foreach ($shopCart as $item) {


          $product = Product::find($item['product_id']);

          $totalPrice = $item['qty'] * $product['price'];

          $cartProducts[] = ['id' => $item['product_id'], 'name' => $product['name'] ,'price' => $totalPrice, 'qty' => $item['qty']];

        }
        echo "<pre>";
        var_dump($cartProducts);
        return view('/cart')->with('cartProducts', $cartProducts);
      }
      return view('/cart');
    }






    public function deleteItem(Request $request, $product_id)
    {


    }



  }
