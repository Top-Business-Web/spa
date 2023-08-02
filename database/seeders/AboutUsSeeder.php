<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
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
                'images' => json_encode(['1.jpg', '2.jpg', '3.jpg']),
                'top_title' => 'Spa',
                'top_description' => 'Sint dolore voluptate id minim in qui enim ad incididunt. Sunt officia est laborum qui enim officia. Eu anim ullamco excepteur aute incididunt ut ut. Proident esse magna occaecat veniam magna occaecat commodo nostrud.',
                'down_title' => 'Spa Down',
                'down_description' => 'Ullamco Lorem amet reprehenderit aute officia laborum. Occaecat anim nulla id occaecat aliquip Lorem sunt amet cillum est est incididunt reprehenderit et. Duis non qui ut ullamco dolor cillum. Mollit id cillum tempor minim velit labore tempor consequat nisi voluptate eu reprehenderit deserunt.',
                'year' => '2023',
            ],
        ];

        DB::table('about_us')->insert($data);
    }
}
