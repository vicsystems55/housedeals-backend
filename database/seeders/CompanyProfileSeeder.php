<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('company_profiles')->insert([

            [
                'id' => 1,
                'user_id' => 10003,
                'managing_directors_name' => 'Engr. Yusuf Jamil',
                'cac_no' => '1833456',
                'business_address' => 'Central Business District Abuja',
                'business_website' => 'https://beemetech.com.ng',
                'business_email' => 'admin@beemtech.com.ng',
                'contact_person' => 'Janet Matthews',
                'business_logo' => config('app.url').'company_logos/default.png',
                'doc1' => config('app.url').'company_documents/default1.png',
                'doc2' => config('app.url').'company_documents/default2.png',
                'doc3' => config('app.url').'company_documents/default3.png',
                'doc4' => config('app.url').'company_documents/default4.png',
            ]
        ]);
    }
}
