<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class ListingImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listing_images')->insertOrIgnore([

            [
                'listing_id' => 1,
                'url' => config('app.url').'listing_images/1.jpg',
                'order' => 1
            ],

            [
                'listing_id' => 2,
                'url' => config('app.url').'listing_images/2.jpg',
                'order' => 1
            ],

            [
                'listing_id' => 3,
                'url' => config('app.url').'listing_images/3.jpg',
                'order' => 1
            ],


        ]);
    }
}
