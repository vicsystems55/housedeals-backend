<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

use Carbon\Carbon;

class SubscriptionPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
        DB::table('subscription_packages')->insertOrIgnore([

            [   'id' => 1,
                'name' => 'Basic',
                'description' => 'Normal Listing optimization',
                'icon' => config('app.url').'subscription_packages_logo/basic.png',
                'cost' => '20000',
                'type' => '',
                'sub_type' => '',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(30),
            ],

            [
                'id' => 2,
                'name' => 'Silver',
                'description' => 'Silver Listing optimization',
                'icon' => config('app.url').'subscription_packages_logo/silver.png',
                'cost' => '20000',
                'type' => '',
                'sub_type' => '',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(40),
            ],


            [
                'id' => 3,
                'name' => 'VIP',
                'description' => 'VIP Listing optimization',
                'icon' => config('app.url').'subscription_packages_logo/vip.png',
                'cost' => '20000',
                'type' => '',
                'sub_type' => '',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(50),
            ]
        ]);
    }
}
