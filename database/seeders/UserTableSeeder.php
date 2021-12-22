<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insertOrIgnore([

            [
                'package_id' => '1',
                'name' => 'Administrator',
                'role' => 'admin',
                'email' => 'admin@medicsetal.org',
                'password' => 'medicsetal2021',

            ],

            [
                'package_id' => '1',
                'name' => 'Jane Doe',
                'role' => 'user',
                'email' => 'jane@medicsetal.org',
                'password' => 'medicsetal2021',

            ],

            [
                'package_id' => '1',
                'name' => 'John Doe',
                'role' => 'user',
                'email' => 'john@medicsetal.org',
                'password' => 'medicsetal2021',

            ],
            
            
             ]);
            
    }
}


