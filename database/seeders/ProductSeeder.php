<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            array(
                'name' => 'Pupuk Organik Granule Organindo',
                'images' => 'pupuk-organik-granule-organindo.jpg',
                'categories_id' => 1,
                'price' => 250000,
                'weight' => 10000.00,
                'small_description' => 'Pupuk Organik Granule Organindo NASA, Revolusi pupuk organik berbentuk granule modern dengan kandungan lengkap, kualitas tinggi, praktis dan ekonomis.',
                'description' => 'Pupuk Organik Granule Organindo NASA, Revolusi pupuk organik berbentuk granule modern dengan kandungan lengkap, kualitas tinggi, praktis dan ekonomis.',
                'slug' => 'pupuk-organik-granule-organindo',
                'qty' => 10,
                'status' => 0,
                'trending' => 0
            ),
            array(
                'name' => 'SHANAS Premium Touch Shampoo',
                'images' => 'shanas-premium-touch-shampoo.jpg',
                'categories_id' => 2,
                'price' => 45000,
                'weight' => 150.00,
                'small_description' => 'SHANAS Premium Touch Shampoo Nasa hadir dengan kandungan Punica Granatum Fruit Extract, Kakadu Plum, Gluthatione dan Parfum Aromatherapy.',
                'description' => 'SHANAS Premium Touch Shampoo Nasa hadir dengan kandungan Punica Granatum Fruit Extract, Kakadu Plum, Gluthatione dan Parfum Aromatherapy.',
                'slug' => 'shanas-premium-touch-shampoo',
                'qty' => 10,
                'status' => 0,
                'trending' => 1
            ),
            array(
                'name' => 'SmarThink Sabun Cuci Piring',
                'images' => 'smarthink-sabun-cuci-piring.jpg',
                'categories_id' => 3,
                'price' => 39000,
                'weight' => 900.00,
                'small_description' => 'SmarThink Sabun Cuci Piring merupakan NASA dengan ekstrak jeruk nipis asli diperkuat dengan mineral alami, menghilangkan lemak lebih cepat dan mudah.',
                'description' => 'SmarThink Sabun Cuci Piring merupakan NASA dengan ekstrak jeruk nipis asli diperkuat dengan mineral alami, menghilangkan lemak lebih cepat dan mudah.',
                'slug' => 'smarthink-sabun-cuci-piring',
                'qty' => 10,
                'status' => 0,
                'trending' => 1
            ),
        ));
    }
}
