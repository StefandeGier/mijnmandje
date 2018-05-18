<?php
namespace App\Facades;

use App\Category;

class Navigation
{
    public static function getAllCategories()
    {
        $categories = Category::all();

        return $categories;
    }
}
