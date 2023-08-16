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
        $data = [
            [
                'image' => 'uploads/admins/categories/service_img_5.jpg',
                'title' => 'Massage',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '1',
                'top' => '1',
                'service_id' => '1',
            ],
            [
                'image' => 'uploads/admins/categories/about_img_1.jpg',
                'title' => 'Body treatment',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '3',
                'top' => '1',
                'service_id' => '1',
            ],
            [
                'image' => 'uploads/admins/categories/blog_img_3.jpg',
                'title' => 'Facial treatment',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '1',
            ],
            // spa service
            [
                'image' => 'uploads/admins/categories/service_2_img_4.jpg',
                'title' => 'Hairdressing',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_4.jpg',
                'title' => 'Hair coloring',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_6.jpg',
                'title' => 'Treatment',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_6.jpg',
                'title' => 'Sauna Relax Double',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_6.jpg',
                'title' => 'Therapy alone',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
