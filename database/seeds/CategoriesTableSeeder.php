<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'kinderen'
        ]);

        DB::table('categories')->insert([
            'name' => 'technologie'
        ]);

        DB::table('categories')->insert([
            'name' => 'boeken'
        ]);

        DB::table('categories')->insert([
            'name' => 'kantoor'
        ]);

        DB::table('categories')->insert([
            'name' => 'hobby'
        ]);
    }
}
