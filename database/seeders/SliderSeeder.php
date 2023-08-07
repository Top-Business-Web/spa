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
                'description' => 'Esse irure dolore reprehenderit occaecat velit ut nulla minim laborum. Aliquip eu sit elit qui ullamco proident in fugiat Lorem est id. Id laborum cillum cillum in ex sint pariatur deserunt excepteur aute velit. Enim in sit incididunt est. Nulla consectetur aliquip quis id irure id sunt cupidatat in Lorem enim Lorem. Dolor non aliqua aliqua aute. Consectetur quis proident voluptate aliqua.',
                'image' => 'uploads/admins/sliders/banner_img_1.jpg',
                'url' => 'https://www.google.com/'
            ],
            [
                'title' => 'spa2',
                'description' => 'Esse irure dolore reprehenderit occaecat velit ut nulla minim laborum. Aliquip eu sit elit qui ullamco proident in fugiat Lorem est id. Id laborum cillum cillum in ex sint pariatur deserunt excepteur aute velit. Enim in sit incididunt est. Nulla consectetur aliquip quis id irure id sunt cupidatat in Lorem enim Lorem. Dolor non aliqua aliqua aute. Consectetur quis proident voluptate aliqua.',
                'image' => 'uploads/admins/sliders/banner_img_2.jpg',
                'url' => 'https://www.google.com/'
            ],
            [
                'title' => 'spa3',
                'description' => 'Esse irure dolore reprehenderit occaecat velit ut nulla minim laborum. Aliquip eu sit elit qui ullamco proident in fugiat Lorem est id. Id laborum cillum cillum in ex sint pariatur deserunt excepteur aute velit. Enim in sit incididunt est. Nulla consectetur aliquip quis id irure id sunt cupidatat in Lorem enim Lorem. Dolor non aliqua aliqua aute. Consectetur quis proident voluptate aliqua.',
                'image' => 'uploads/admins/sliders/banner_img_3.jpg',
                'url' => 'https://www.google.com/'
            ],
        ];
        DB::table('sliders')->insert($data);
    }
}
