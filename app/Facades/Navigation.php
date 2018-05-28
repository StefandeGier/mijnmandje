<?php
namespace App\Facades;

use App\Category;
use Session;

class Navigation
{
    public static function getAllCategories()
    {
        $categories = Category::all();
//<li>{{Navigation::getAllCategories()->shopCart}}</li>
        return $categories;
    }

    
}
