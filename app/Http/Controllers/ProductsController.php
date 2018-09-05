<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByCategory($category_id)
    {
        $category = Category::find($category_id);

        return view('product_list',  ['products' => $category->products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('product',compact('product'));

    }
<<<<<<< HEAD

=======
>>>>>>> 161a34825296db4e885e47f203306cd655ca0ad2
}
