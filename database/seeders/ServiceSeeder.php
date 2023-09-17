<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
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
                'title' => 'Spa',
                'title_ar' => 'سبا',
            ],
            [
                'title' => 'Salon',
                'title_ar' => 'صالون'
            ],
        ];
        DB::table('services')->insert($data);
    }
}
