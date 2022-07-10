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
                'total_product' => 3
            ),
            array(
                'category' => 'Body Care',
                'total_product' => 1
            ),
            array(
                'category' => 'Home Care',
                'total_product' => 1
            ),
            array(
                'category' => 'Kesehatan',
                'total_product' => 1
            ),
            array(
                'category' => 'Kosmetik',
                'total_product' => 1
            ),
            array(
                'category' => 'Skin Care',
                'total_product' => 1
            )
        ));
    }
}
