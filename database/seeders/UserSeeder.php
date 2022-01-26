<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;


use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserSeeder extends Seeder
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
                'id' => '10001',
                'name' => 'Tony Nwagba',
                'email' => 'admin001@housedealsafrica.com',
                'otp' => 990900,
                'email_verified_at' => now(),
                'ip_address' => request()->ip(),
                'avatar' => config('app.url').'avatars/default.png',
                'password' =>  Hash::make('housedeals2021'),
                
                'email_verified_at' => now(),
                'role' => 1,
                'usercode' => 'HDA0000',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10002',
                'name' => 'John Doe',
                'email' => 'agent1@housedealsafrica.com',
                'otp' => 990900,
                'email_verified_at' => now(),
                'ip_address' => request()->ip(),
                'avatar' => config('app.url').'avatars/default.png',
                'password' =>  Hash::make('housedeals2021'),
               
                'email_verified_at' => now(),
                'role' => 2,
                'usercode' => 'HDA0001',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10003',
                'name' => 'Jane Doe',
                'email' => 'company@mail.com',
                'otp' => 990900,
                'email_verified_at' => now(),
                'ip_address' => request()->ip(),
                'avatar' => config('app.url').'avatars/default.png',
                'password' =>  Hash::make('housedeals2021'),
              
                'email_verified_at' => now(),
                'role' => 3,
                'usercode' => 'HDA0003',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            
            
                
                
          ]);
    }
}
