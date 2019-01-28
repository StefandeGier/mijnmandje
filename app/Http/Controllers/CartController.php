<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Classes\Cart;

use Illuminate\Auth\GenericUser;

use Session;

class CartController extends Controller
{


    public function addShoppingCart(Request $request)
    {
      $cart = new Cart();
      $cart->add($request);
      return redirect('/cart');
    }

    public function viewCart($order = false)
    {
      $cart = new Cart();
      $cartProducts = $cart->viewCart();
      if ($order == false && $cartProducts != false ) {
        return view('/cart')->with('cartProducts', @$cartProducts);

      }
      return view('cart');
    }

    public function deleteItem(Request $request, $product_id)
    {
      $cart = new Cart();
      $cart->deleteItem($product_id);

      return redirect('/cart');
    }

    public function updateCart(Request $request)
    {
      $cart = new Cart();
      $cart->updateItem($request);

      return redirect('/cart');
    }
  }
