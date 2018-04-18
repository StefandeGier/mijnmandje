<?php

use Illuminate\Database\Seeder;

class Categories_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories_products')->insert([
            [
            'catergory_id' => 1 , 'product_id' => 1
            ],
            [
            'catergory_id' => 5 , 'product_id' => 2
            ],
            [
            'catergory_id' => 4 , 'product_id' => 3
            ],
            [
            'catergory_id' => 2 , 'product_id' => 4
            ],
            [
            'catergory_id' => 3 , 'product_id' => 5
            ]
        ]);
    }
}
