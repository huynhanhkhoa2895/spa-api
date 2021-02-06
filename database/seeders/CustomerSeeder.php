<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customer')->insert([
            [
                'name' => 'customer1',
                'email' => 'customer1@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => '01635076638',
            ],
            [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => '0938247099',
            ],
            [
                'name' => 'customer1',
                'email' => 'customer2@gmail.com',
                'phone' => '0335076638',
                'password' => Hash::make('123456'),
            ],
        ]);
    }
}
