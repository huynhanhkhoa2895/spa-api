<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            [
                'name' => "Kem chống nắng",
                'spa' => 1
            ],
            [
                'name' => "Kem dưỡng ẩm",
                'spa' => 1
            ],
            [
                'name' => "Kem trị thâm",
                'spa' => 1
            ],
        ]);
    }
}
