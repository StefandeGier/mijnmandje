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
          [
            'name' => 'kinderen'
          ],
          [
            'name' => 'technologie'
          ],
          [
            'name' => 'boeken'
          ],
          [
            'name' => 'kantoor'
          ],
          [
            'name' => 'hobby'
          ]
        ]);


    }
}
