<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('listings')->insert([
            [
                'company_profile_id' => 1,
                'listing_code' => uniqid(),
                'title' => 'Leptons MariGold',
                'description' => '',
                'location' => 'Life Camp, Abuja',
                'google_map_url' => 1,
                'price' => '140000000',
                'display_price' => '137200000',
                'no_units' => 1,
                'views' => 1,
                'property_type' => 'Semi Detached Duplex',
                'unit_area' => '424 m²',
                'total_area' => '424 m²',
                'published' => 1,
                'approved' => 1,
                'booked' => 0,
                'sold' => 0,
                'recommended' => 1,
            ],

            [
                'company_profile_id' => 1,
                'listing_code' => uniqid(),
                'title' => 'Ricardo Homes',
                'description' => 'Ricardo Homes by Mobus is a beautifully conceptualized exclusive neighbourhood set over 2.7ha within the River Park community, along the Airport Road in Abuja FCT, Nigeria. The development consists of 88 units of simple and modern 4 bedroom terrace duplexes, set in a fast-growing self-sufficient community, offering a safe and wholesome living experience.',
                'location' => 'Lugbe, Abuja',
                'google_map_url' => 1,
                'price' => '65000000',
                'display_price' => '63700000',
                'no_units' => 1,
                'views' => 1,
                'property_type' => 'Terrace Duplex',
                'unit_area' => '424 m²',
                'total_area' => '424 m²',
                'published' => 1,
                'approved' => 1,
                'booked' => 0,
                'sold' => 0,
                'recommended' => 1,
            ],
            
            [
                'company_profile_id' => 1,
                'listing_code' => uniqid(),
                'title' => 'Ruisseau Residence',
                'description' => 'Ricardo Homes by Mobus is a beautifully conceptualized exclusive neighbourhood set over 2.7ha within the River Park community, along the Airport Road in Abuja FCT, Nigeria. The development consists of 88 units of simple and modern 4 bedroom terrace duplexes, set in a fast-growing self-sufficient community, offering a safe and wholesome living experience.',
                'location' => 'Karsana, Abuja',
                'google_map_url' => 1,
                'price' => '41500000',
                'display_price' => '41085000',
                'no_units' => 1,
                'views' => 1,
                'property_type' => 'Semi Detached Duplex',
                'unit_area' => '424 m²',
                'total_area' => '424 m²',
                'published' => 1,
                'approved' => 1,
                'booked' => 0,
                'sold' => 0,
                'recommended' => 1,
            ]
        ]);
    }
}

