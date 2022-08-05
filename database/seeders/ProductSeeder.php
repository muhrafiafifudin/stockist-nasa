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
                'product_code' => 'SGRAN',
                'name' => 'Pupuk Organik Granule Organindo',
                'images' => 'pupuk-organik-granule-organindo.jpg',
                'categories_id' => 1,
                'sub_categories_id' => 1,
                'price' => 250000,
                'weight' => 10000.00,
                'small_description' => 'Pupuk Organik Granule Organindo NASA, Revolusi pupuk organik berbentuk granule modern dengan kandungan lengkap, kualitas tinggi, praktis dan ekonomis.',
                'description' => 'Pupuk Organik Granule Organindo NASA, Revolusi pupuk organik berbentuk granule modern dengan kandungan lengkap, kualitas tinggi, praktis dan ekonomis.',
                'slug' => 'pupuk-organik-granule-organindo',
                'qty' => 10,
                'status' => 0,
                'trending' => 1
            ),
            array(
                'product_code' => 'VTN',
                'name' => 'Viterna Organik Cair',
                'images' => 'viterna-organik-cair.jpg',
                'categories_id' => 1,
                'sub_categories_id' => 2,
                'price' => 65000,
                'weight' => 500.00,
                'small_description' => 'VITERNA Plus Organik Cair adalah Suplemen Vitamin Ternak NASA, teruji mampu meningkatkan kuantitas, kualitas dan kesehatan pada ternak, ikan dan udang.',
                'description' => 'VITERNA Plus Organik Cair adalah Suplemen Vitamin Ternak NASA, teruji mampu meningkatkan kuantitas, kualitas dan kesehatan pada ternak, ikan dan udang.',
                'slug' => 'viterna-organik-cair',
                'qty' => 10,
                'status' => 0,
                'trending' => 0
            ),
            array(
                'product_code' => 'SHANASPRO',
                'name' => 'SHANAS Premium Touch Shampoo',
                'images' => 'shanas-premium-touch-shampoo.jpg',
                'categories_id' => 2,
                'sub_categories_id' => NULL,
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
                'product_code' => 'SCPIRING',
                'name' => 'SmarThink Sabun Cuci Piring',
                'images' => 'smarthink-sabun-cuci-piring.jpg',
                'categories_id' => 3,
                'sub_categories_id' => NULL,
                'price' => 39000,
                'weight' => 900.00,
                'small_description' => 'SmarThink Sabun Cuci Piring merupakan NASA dengan ekstrak jeruk nipis asli diperkuat dengan mineral alami, menghilangkan lemak lebih cepat dan mudah.',
                'description' => 'SmarThink Sabun Cuci Piring merupakan NASA dengan ekstrak jeruk nipis asli diperkuat dengan mineral alami, menghilangkan lemak lebih cepat dan mudah.',
                'slug' => 'smarthink-sabun-cuci-piring',
                'qty' => 10,
                'status' => 0,
                'trending' => 1
            ),
            array(
                'product_code' => 'AVGK',
                'name' => 'MORESKIN Aloe Vera Gel',
                'images' => 'moreskin-aloe-vera-gel.jpg',
                'categories_id' => 6,
                'sub_categories_id' => 4,
                'price' => 80000,
                'weight' => 100.00,
                'small_description' => 'Minskii, bedanya Facial Foam Glass Skin sama facial wash lainnya apa sih ? Moreskin Facial Foam Glass Skin mengandung: Citric Acid, Galactomyces Ferment Filtrate, Yogurt Extract, Olive Oil Yang diformulasikan khusus untuk mencerahkan, membersihkan, dan tetap menjaga kelembaban kulitmu.',
                'description' => 'Minskii, bedanya Facial Foam Glass Skin sama facial wash lainnya apa sih ? Moreskin Facial Foam Glass Skin mengandung: Citric Acid, Galactomyces Ferment Filtrate, Yogurt Extract, Olive Oil Yang diformulasikan khusus untuk mencerahkan, membersihkan, dan tetap menjaga kelembaban kulitmu..',
                'slug' => 'moreskin-aloe-vera-gel',
                'qty' => 10,
                'status' => 0,
                'trending' => 0
            ),
            array(
                'product_code' => 'LCPF50',
                'name' => 'Lacoco Sunscreen',
                'images' => 'lacoco-sunscreen.jpg',
                'categories_id' => 6,
                'sub_categories_id' => 5,
                'price' => 170000,
                'weight' => 20.00,
                'small_description' => 'Lacoco Sunscreen dapat Melindungi Kulit Dari Sinar Matahari, Mencegah Kulit Terbakar, Mencegah Penuaan Dini, Mencegah Terjadinya Kerusakan Kulit dan Memperkuat Skin Barrier.',
                'description' => 'Lacoco Sunscreen dapat Melindungi Kulit Dari Sinar Matahari, Mencegah Kulit Terbakar, Mencegah Penuaan Dini, Mencegah Terjadinya Kerusakan Kulit dan Memperkuat Skin Barrier.',
                'slug' => 'lacoco-sunscreen',
                'qty' => 10,
                'status' => 0,
                'trending' => 1
            ),
            array(
                'product_code' => 'EBS',
                'name' => 'Erhsali Brightening Soap',
                'images' => 'ershali-brightening-soap.jpg',
                'categories_id' => 6,
                'sub_categories_id' => 6,
                'price' => 55000,
                'weight' => 90.00,
                'small_description' => 'Lacoco Sunscreen dapat Melindungi Kulit Dari Sinar Matahari, Mencegah Kulit Terbakar, Mencegah Penuaan Dini, Mencegah Terjadinya Kerusakan Kulit dan Memperkuat Skin Barrier.',
                'description' => 'Lacoco Sunscreen dapat Melindungi Kulit Dari Sinar Matahari, Mencegah Kulit Terbakar, Mencegah Penuaan Dini, Mencegah Terjadinya Kerusakan Kulit dan Memperkuat Skin Barrier.',
                'slug' => 'ershali-brightening-soap',
                'qty' => 10,
                'status' => 0,
                'trending' => 1
            ),
        ));
    }
}
