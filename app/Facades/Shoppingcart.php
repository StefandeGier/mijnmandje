<?php
namespace App\Facades;

use Session;

class Shoppingcart
{

    public static function getCartTotal()
    {

        $shopCart = Session::get('cart');

        $amount = count($shopCart);

        return $amount;
    }
}
