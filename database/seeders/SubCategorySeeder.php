<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert(array(
            array(
                'categories_id' => 1,
                'sub_category' => 'Pertanian',
                'slug' => 'pertanian',
                'total_product' => 1
            ),
            array(
                'categories_id' => 1,
                'sub_category' => 'Peternakan',
                'slug' => 'peternakan',
                'total_product' => 1
            ),
            array(
                'categories_id' => 1,
                'sub_category' => 'Perikanan',
                'slug' => 'perikanan',
                'total_product' => 0
            ),
            array(
                'categories_id' => 6,
                'sub_category' => 'Moreskin',
                'slug' => 'moreskin',
                'total_product' => 1
            ),
            array(
                'categories_id' => 6,
                'sub_category' => 'Lacoco',
                'slug' => 'lacoco',
                'total_product' => 1
            ),
            array(
                'categories_id' => 6,
                'sub_category' => 'Ershali',
                'slug' => 'ershali',
                'total_product' => 1
            ),
        ));
    }
}
