<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // spa service categories
        $data = [
            [
                'image' => 'uploads/admins/categories/service_img_5.jpg',
                'title' => 'Massage',
                'title_ar' => 'تدليك',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '1',
                'top' => '1',
                'service_id' => '1',
            ],
            [
                'image' => 'uploads/admins/categories/about_img_1.jpg',
                'title' => 'Body treatment',
                'title_ar' => 'علاج الجسم',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '3',
                'top' => '1',
                'service_id' => '1',
            ],
            [
                'image' => 'uploads/admins/categories/blog_img_3.jpg',
                'title' => 'Facial treatment',
                'title_ar' => 'علاج الوجه',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '1',
            ],

           // Salon service categories
            [
                'image' => 'uploads/admins/categories/service_2_img_4.jpg',
                'title' => 'Hairdressing',
                'title_ar' => 'تصفيف الشعر',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_4.jpg',
                'title' => 'Hair coloring',
                'title_ar' => 'صبغ شعر',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_6.jpg',
                'title' => 'Treatment',
                'title_ar' => 'علاج',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_6.jpg',
                'title' => 'Sauna Relax Double',
                'title_ar' => 'استرخاء ساونا مزدوجة',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_6.jpg',
                'title' => 'Therapy alone',
                'title_ar' => 'العلاج وحده',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'description_ar' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
