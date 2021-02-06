<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('banner')->insert([
            [
                'title' => "Banner1",
                'img' => 'b1.png',
            ],
            [
                'title' => "Banner2",
                'img' => 'b2.png',
            ],
            [
                'title' => "Banner3",
                'img' => 'b3.png',
            ],
            [
                'title' => "Banner4",
                'img' => 'b4.png',
            ],
        ]);
    }
}
