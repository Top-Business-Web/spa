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
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_1.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_2.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_3.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_4.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_5.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_6.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_7.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_8.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_9.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_8.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_7.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_6.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_6.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_5.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_4.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_3.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_2.jpg'
            ],
            [
                'title' => 'Faciale Massage',
                'image' => 'uploads/admins/galleries/gallery_img_1.jpg'
            ],
        ];
        DB::table('gellaries')->insert($data);
    }
}
