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
                'title_ar' => 'تدليك سبا',
                'description' => 'spa message offer in 70%',
                'description_ar' => 'عرض مساج سبا في 70٪'
            ],
            [
                'title' => 'spa massage 2',
                'title_ar' => 'تدليك سبا',
                'description' => 'spa message offer in 30%',
                'description_ar' => 'عرض مساج سبا في 70٪',
            ],
            [
                'title' => 'spa massage 3',
                'title_ar' => 'تدليك سبا',
                'description' => 'spa message offer in 50%',
                'description_ar' => 'عرض مساج سبا في 70٪',
            ],
            [
                'title' => 'spa massage 4',
                'title_ar' => 'تدليك سبا',
                'description' => 'spa message offer in 90%',
                'description_ar' => 'عرض مساج سبا في 70٪',
            ],
        ];

        DB::table('offers')->insert($data);
    }
}
