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
                'title' => 'Aroma Therapy',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '1',
                'top' => '1',
                'service_id' => '1',
            ],
            [
                'image' => 'uploads/admins/categories/about_img_1.jpg',
                'title' => 'Facial Therapy',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '3',
                'top' => '1',
                'service_id' => '1',
            ],
            [
                'image' => 'uploads/admins/categories/blog_img_3.jpg',
                'title' => 'Candle Massage',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_2_img_4.jpg',
                'title' => 'Stone Spa',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '1',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_4.jpg',
                'title' => 'Body Treatments',
                'description' => 'Qui laborum dolore voluptate voluptate',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => 'uploads/admins/categories/service_img_6.jpg',
                'title' => 'Sauna Relax',
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
                'service_id' => '1',
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
