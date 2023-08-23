<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
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
                'title' => 'spa',
                'title_ar' => 'سبا',
                'description' => 'Esse irure dolore reprehenderit occaecat.',
                'description_ar' => 'مجموعة متنوعة من الرعاية',
                'image' => 'uploads/admins/sliders/banner_img_1.jpg',
                'url' => 'https://www.google.com/'
            ],
            [
                'title' => 'spa2',
                'title_ar' => 'سبا2',
                'description' => 'Esse irure dolore reprehenderit occaecat.',
                'description_ar' => 'مجموعة متنوعة من الرعاية',
                'image' => 'uploads/admins/sliders/banner_img_2.jpg',
                'url' => 'https://www.google.com/'
            ],
            [
                'title' => 'spa3',
                'title_ar' => 'سبا3',
                'description' => 'Esse irure dolore reprehenderit occaecat.',
                'description_ar' => 'مجموعة متنوعة من الرعاية',
                'image' => 'uploads/admins/sliders/banner_img_3.jpg',
                'url' => 'https://www.google.com/'
            ],
        ];
        DB::table('sliders')->insert($data);
    }
}
