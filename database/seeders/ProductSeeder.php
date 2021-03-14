<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            [
                'name' => 'KCN-1',
                'price' => "250000",
                'img' => 'kcn-1.png',
                'category' => 1,
                'spa' => 1,
            ],
            [
                'name' => 'KCN-2',
                'price' => "290000",
                'img' => 'kcn-2.png',
                'category' => 1,
                'spa' => 1,
            ],
            [
                'name' => 'KCN-3',
                'price' => "350000",
                'img' => 'kcn-3.png',
                'category' => 1,
                'spa' => 1,
            ],
            [
                'name' => 'KCN-4',
                'price' => "440000",
                'img' => 'kcn-4.png',
                'category' => 1,
                'spa' => 1,
            ],
            [
                'name' => 'KCN-5',
                'price' => "40000",
                'img' => 'kcn-5.png',
                'category' => 1,
                'spa' => 1,
            ],

            [
                'name' => 'KDA-1',
                'price' => "250000",
                'img' => 'kda-1.png',
                'category' => 2,
                'spa' => 1,
            ],
            [
                'name' => 'KDA-2',
                'price' => "290000",
                'img' => 'kda-2.png',
                'category' => 2,
                'spa' => 1,
            ],
            [
                'name' => 'KDA-3',
                'price' => "350000",
                'img' => 'kda-3.png',
                'category' => 2,
                'spa' => 1,
            ],
            [
                'name' => 'KDA-4',
                'price' => "440000",
                'img' => 'kda-4.png',
                'category' => 2,
                'spa' => 1,
            ],
            [
                'name' => 'KDA-5',
                'price' => "40000",
                'img' => 'kda-5.png',
                'category' => 2,
                'spa' => 1,
            ],

            [
                'name' => 'KTT-1',
                'price' => "250000",
                'img' => 'ktt-1.png',
                'category' => 3,
                'spa' => 1,
            ],
            [
                'name' => 'KTT-2',
                'price' => "290000",
                'img' => 'KTT-2.png',
                'category' => 3,
                'spa' => 1,
            ],
            [
                'name' => 'KTT-3',
                'price' => "350000",
                'img' => 'KTT-3.png',
                'category' => 3,
                'spa' => 1,
            ],
            [
                'name' => 'KTT-4',
                'price' => "440000",
                'img' => 'kda-4.png',
                'category' => 3,
                'spa' => 1,
            ],
            [
                'name' => 'KTT-5',
                'price' => "40000",
                'img' => 'kda-5.png',
                'category' => 3,
                'spa' => 1,
            ],
        ]);
    }
}
