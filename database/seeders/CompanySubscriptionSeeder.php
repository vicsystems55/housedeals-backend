<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class CompanySubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('company_subscriptions')->insertOrIgnore([
            [
                'company_profiles_id' => 1,
                'subscription_packages_id' => 1,
            ]
        ]);



    }
}
