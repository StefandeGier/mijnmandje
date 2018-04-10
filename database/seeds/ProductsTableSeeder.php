<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'barbie',
            'description' => 'Een geweldige pop voor een lage prijs',
            'price' => '6.99'
        ]);

        DB::table('products')->insert([
            'name' => 'verf',
            'description' => '5 kleuren verf',
            'price' => '7.99'
        ]);

        DB::table('products')->insert([
            'name' => 'bureau',
            'description' => 'Een tafel 200x80x70 houten tafel',
            'price' => '159.99'
        ]);

        DB::table('products')->insert([
            'name' => 'smartphone',
            'description' => 'Een smartphone voor een lage prijs',
            'price' => '89.99'
        ]);

        DB::table('products')->insert([
            'name' => 'harry potter',
            'description' => 'Beleef de geweldige avonturen van harry potter en zijn vrienden',
            'price' => '12.99'
        ]);
    }
}
