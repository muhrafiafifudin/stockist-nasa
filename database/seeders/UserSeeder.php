<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => bcrypt('12345678'),
                'is_member' => 0,
                'point' => 0
            ),
            array(
                'name' => 'Member',
                'email' => 'member@example.com',
                'password' => bcrypt('12345678'),
                'is_member' => 1,
                'point' => 50
            )
        ));
    }
}
