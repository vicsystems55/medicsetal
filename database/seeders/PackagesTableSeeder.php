<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
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
                'name' => 'Medics Package 1',
                'description' => 'Medics Package 1',
                'duration' => '0',
                'status' => 'active',
                'featured_image' => 'package1.png',
            ],

            [
                'name' => 'Medics Package 2',
                'description' => 'Medics Package 2',
                'duration' => '3',
                'status' => 'active',
                'featured_image' => 'package2.png',
            ],

            [
                'name' => 'Medics Package 3',
                'description' => 'Medics Package 3',
                'duration' => '6',
                'status' => 'active',
                'featured_image' => 'package3.png',
            ],

            [
                'name' => 'Medics Package 4',
                'description' => 'Medics Package 4',
                'duration' => '12',
                'status' => 'active',
                'featured_image' => 'package4.png',
            ],

        ]);


    }
}


