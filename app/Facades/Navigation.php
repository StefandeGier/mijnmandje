<?php
namespace App\Facades;

use App\Categories;

class Navigation
{
    public static function getAllCategories()
    {
        $categories = Categories::all();
        
        return $categories;
    }
}
