<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

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

        DB::table('packages')->insertOrIgnore([

            [
                'name' => 'Bronze',
                'fee' => '25000',
                'description' => 'Medics Package 1',
                'duration' => '1',
                'status' => 'active',
                'featured_image' => 'https://app.medicsetal.org/packages/bronze.png',
            ],

            [
                'name' => 'Silver',
                'fee' => '70000',
                'description' => 'Medics Package 2',
                'duration' => '3',
                'status' => 'active',
                'featured_image' => 'https://app.medicsetal.org/packages/silver.png',
            ],

            [
                'name' => 'Gold',
                'fee' => '135000',
                'description' => 'Medics Package 3',
                'duration' => '6',
                'status' => 'active',
                'featured_image' => 'https://app.medicsetal.org/packages/gold.png',
            ],

            [
                'name' => 'Diamond',
                'fee' => '135000',
                'description' => 'Medics Package 4',
                'duration' => '12',
                'status' => 'active',
                'featured_image' => 'https://app.medicsetal.org/packages/diamond.png',
            ],

        ]);


    }
}


