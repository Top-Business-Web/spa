<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GellariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Massage',
                'image' => '1.jpg'
            ],
            [
                'title' => 'Massage Oil',
                'image' => '2.jpg'
            ],
            [
                'title' => 'Massage Rock',
                'image' => '3.jpg'
            ],
        ];
        DB::table('gellaries')->insert($data);
    }
}
