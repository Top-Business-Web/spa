<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
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
                'title' => 'spa massage',
                'description' => 'spa message offer in 70%'
            ],
            [
                'title' => 'spa massage 2',
                'description' => 'spa message offer in 30%'
            ],
            [
                'title' => 'spa massage 3',
                'description' => 'spa message offer in 50%'
            ],
            [
                'title' => 'spa massage 4',
                'description' => 'spa message offer in 90%'
            ],
        ];

        DB::table('offers')->insert($data);
    }
}
