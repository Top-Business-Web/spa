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
                'image' => '1.jpg',
                'title' => 'spa',
                'description' => 'Qui laborum dolore voluptate voluptate ad ad duis velit adipisicing. Laborum sint sunt amet ad elit sint consequat pariatur. Enim duis ullamco eiusmod elit non tempor voluptate anim. Proident labore laborum tempor consectetur mollit magna ipsum. Enim minim ex veniam culpa ipsum deserunt voluptate elit irure amet occaecat esse.',
                'view' => '1',
                'top' => '2',
                'service_id' => '1',
            ],
            [
                'image' => '2.jpg',
                'title' => 'spa2',
                'description' => 'Qui laborum dolore voluptate voluptate ad ad duis velit adipisicing. Laborum sint sunt amet ad elit sint consequat pariatur. Enim duis ullamco eiusmod elit non tempor voluptate anim. Proident labore laborum tempor consectetur mollit magna ipsum. Enim minim ex veniam culpa ipsum deserunt voluptate elit irure amet occaecat esse.',
                'view' => '2',
                'top' => '1',
                'service_id' => '2',
            ],
            [
                'image' => '3.jpg',
                'title' => 'spa3',
                'description' => 'Qui laborum dolore voluptate voluptate ad ad duis velit adipisicing. Laborum sint sunt amet ad elit sint consequat pariatur. Enim duis ullamco eiusmod elit non tempor voluptate anim. Proident labore laborum tempor consectetur mollit magna ipsum. Enim minim ex veniam culpa ipsum deserunt voluptate elit irure amet occaecat esse.',
                'view' => '3',
                'top' => '1',
                'service_id' => '3',
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
