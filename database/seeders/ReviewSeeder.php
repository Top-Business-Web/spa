<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
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
                'name' => 'spa',
                'email' => 'spa.spa@gmail.com',
                'description' => 'Commodo deserunt nostrud velit eu consequat sunt. Ex id esse occaecat aute culpa eiusmod voluptate cillum consectetur consequat irure dolore nostrud. Mollit eiusmod excepteur dolor sint. Deserunt ut Lorem laborum fugiat tempor proident laboris elit consectetur enim labore exercitation mollit elit. Sit magna anim enim ullamco labore cupidatat minim est exercitation deserunt amet nostrud. Fugiat in nostrud exercitation incididunt.',
                'rate' => '5',
                'page_id' => '1'
            ],
            [
                'name' => 'spa2',
                'email' => 'spa.spa2@gmail.com',
                'description' => 'Commodo deserunt nostrud velit eu consequat sunt. Ex id esse occaecat aute culpa eiusmod voluptate cillum consectetur consequat irure dolore nostrud. Mollit eiusmod excepteur dolor sint. Deserunt ut Lorem laborum fugiat tempor proident laboris elit consectetur enim labore exercitation mollit elit. Sit magna anim enim ullamco labore cupidatat minim est exercitation deserunt amet nostrud. Fugiat in nostrud exercitation incididunt.',
                'rate' => '4',
                'page_id' => '2'
            ],
            [
                'name' => 'spa3',
                'email' => 'spa.spa3@gmail.com',
                'description' => 'Commodo deserunt nostrud velit eu consequat sunt. Ex id esse occaecat aute culpa eiusmod voluptate cillum consectetur consequat irure dolore nostrud. Mollit eiusmod excepteur dolor sint. Deserunt ut Lorem laborum fugiat tempor proident laboris elit consectetur enim labore exercitation mollit elit. Sit magna anim enim ullamco labore cupidatat minim est exercitation deserunt amet nostrud. Fugiat in nostrud exercitation incididunt.',
                'rate' => '3',
                'page_id' => '3'
            ],
        ];
        DB::table('reviews')->insert($data);
    }
}
