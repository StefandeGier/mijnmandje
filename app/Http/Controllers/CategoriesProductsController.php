<?php

namespace App\Http\Controllers;

use App\Categories_products;
use Illuminate\Http\Request;

class CategoriesProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories_products  $categories_products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  $products = Product::where('group_id', $id)->get();
      //  $tasks = Tasks::where('group_id', $id)->get();
      //  return view('group/show')->withGroup($group,$tasks);
      //  return view('group/show',compact('tasks','group'));

      /*
      prototype <- ?
      // hier ff nadenken over joins <<<<

      $products  = DB::table('catergories_products')
            ->where('id', 'John')->first();
            ->join('products', 'catergories_products.product_id', '=', 'id')
            ->get();
    */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories_products  $categories_products
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories_products $categories_products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories_products  $categories_products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories_products $categories_products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories_products  $categories_products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories_products $categories_products)
    {
        //
    }
}
