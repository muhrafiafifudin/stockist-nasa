<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
            array(
                'category' => 'Agrokompleks',
                'slug' => 'agrokompleks',
                'total_product' => 2
            ),
            array(
                'category' => 'Body Care',
                'slug' => 'body-care',
                'total_product' => 2
            ),
            array(
                'category' => 'Home Care',
                'slug' => 'home-care',
                'total_product' => 1
            ),
            array(
                'category' => 'Kesehatan',
                'slug' => 'kesehatan',
                'total_product' => 0
            ),
            array(
                'category' => 'Kosmetik',
                'slug' => 'kosmetik',
                'total_product' => 0
            ),
            array(
                'category' => 'Skin Care',
                'slug' => 'skin-care',
                'total_product' => 3
            )
        ));
    }
}
