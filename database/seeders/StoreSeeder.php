<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert(array(
            array(
                'name' => 'Stokis Natural Nusantara AD3043',
                'email' => 'stokisnaturalnusantaraad3043@gmail.com',
                'phone_number' => '+62 896 4931 2293',
                'provinces_id' => 10,
                'cities_id' => 196,
                'address' => 'Sidomulyo, Kel. Glagah Wangi, Kec. Polanharjo',
                'postcode' => 57456,
                'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3391833295755!2d110.65602726450727!3d-7.646627727764415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a41b18ca61aad%3A0xbd7a882a1abf5732!2sSidomulyo%2C%20Glagah%20Wangi%2C%20Polanharjo%2C%20Klaten%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1658028427457!5m2!1sen!2sid',
            )
        ));
    }
}
