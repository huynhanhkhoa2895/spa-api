<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SpaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('spa')->insert([
            [
                'name' => "Spa1",
                'address' => "243 Tạ Quang Bửu",
                'img' => 'spa.png',
                'phone' => '0335076638',
            ],
        ]);
    }
}
