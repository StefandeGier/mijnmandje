<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Classes\Cart;

use Session;

class CartController extends Controller
{

  public function __construct()
  {

  }

    public function addShoppingCart(Request $request)
    {

      $product_id = $request->input('product_id');
      $qty =  $request->input('qty');

      if ($qty > 0) {

        $cart = new Cart();
        $product = $cart->add($product_id, $qty);

        Session::push('cart', $product);
        //Session::save();

        //dd(Session::get('cart'));
      }else {
        $request->session()->flash('status_cart_error', 'Cant add product with quantity of zero.');
      }

      return redirect('/cart');

    }

    public function viewCart(Request $request, $order = false)
    {
        //$this->middleware('auth');

      $products = array();
      $shopCart = Session::get('cart');
      if($request->session()->has('cart')) {
        foreach ($shopCart as $item) {

          $product = Product::find($item['product_id']);

          $totalPrice = $item['qty'] * $product['price'];

          $cartProducts[] = ['id' => $item['product_id'], 'name' => $product['name'] ,'price' => $totalPrice, 'qty' => $item['qty']];

        }
        //echo "<pre>";
        //var_dump($cartProducts);
          if ($order == false) {
          // code...

          return view('/cart')->with('cartProducts', @$cartProducts);
          }
      }

    }

    public function deleteItem(Request $request, $product_id)
    {
      $shopCart = Session::get('cart');

      foreach ($shopCart as $key => $item) {
        if ($product_id == $item['product_id']) {

          Session::forget('cart.' .$key);

        }
      }
      return redirect('/cart');
    }

    public function updateCart(Request $request)
    {
      $product_id = $request->input('product_id');
      $qty =  $request->input('qty');

      for ($i=0; $i < count($product_id); $i++) {

        if ($qty[$i] == 0) {
          $this->deleteItem($request, $product_id[$i]);
        }
          else {
            $cart = new Cart();

            $product = $cart->add($product_id[$i], $qty[$i], $update = true);

            Session::push('cart', $product);
          }

      	}
        return redirect('/cart');
      }


  }
