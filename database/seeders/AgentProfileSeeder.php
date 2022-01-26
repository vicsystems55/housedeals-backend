<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class AgentProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('agent_profiles')->insertOrIgnore([

            [
                'user_id' => 10002,
                'bio' => 'Very excited about real estate marketing',
                'gender' => 'male',
                'nationality' => 'Nigeria',
                'adddress' => 'Zone 5, Dutse Alhaji Abuja',
                'phone' => '08023456655',
                'nok_fullname' => 'Victor Asuquo',
                'nok_address' => 'Nyanya Abuja',
                'nok_relationship' => 'brother',
                'nok_phone' => '09033994895',
            ]
        ]);
    }
}
