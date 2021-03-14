<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('agency')->insert([
            [
                'name' => "Chi nhánh 1",
                'address' => "243 Tạ Quang Bửu",
                'phone' => '0335076638',
                'spa' => 1,
            ],
            [
                'name' => "Chi nhánh 2",
                'address' => "856 Tạ Quang Bửu",
                'phone' => '0335076638',
                'spa' => 1,
            ],
        ]);
    }
}
