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
    // About Us Start
    public function run()
    {
        $data = [
            [
                'images' => json_encode([
                    'uploads/admins/about_us/about_img_1.jpg',
                    'uploads/admins/about_us/about_img_2.jpg',
                    'uploads/admins/about_us/about_img_3.jpg',
                    'uploads/admins/about_us/about_welcome_img.jpg',
                    'uploads/admins/about_us/about_page_img_1.jpg',
                    'uploads/admins/about_us/about_page_img_2.jpg',
                ]),
                'top_title' => 'Welcome to alia beauty lounge',
                'top_title_ar' => 'مرحبا بكم في صالة التجميل عليا',
                'top_description' => 'Sint dolore voluptate id minim in qui enim ad incididunt.',
                'top_description_ar' => 'مجموعة متنوعة من الرعاية',
                'down_title' => 'Spa Down',
                'down_title_ar' => 'سبا داون',
                'down_description' => 'Ullamco Lorem amet reprehenderit aute officia laborum.',
                'down_description_ar' => 'مجموعة متنوعة من الرعاية',
                'year' => '5',
            ],
        ];

        DB::table('about_us')->insert($data);
    }
    // About Us END
}
