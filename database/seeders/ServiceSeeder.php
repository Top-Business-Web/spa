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
            ['title' => 'Relaxation'],
            ['title' => 'Therapy'],
            ['title' => 'Aromatherapy'],
            ['title' => 'Pampering'],
            ['title' => 'Stress Relief'],
            ['title' => 'Wellness'],
            ['title' => 'Holistic'],
            ['title' => 'Rejuvenation'],
            ['title' => 'Healing'],
            ['title' => 'Soothing'],
            ['title' => 'Balancing'],
            ['title' => 'Reflexology'],
            ['title' => 'Swedish'],
            ['title' => 'Deep Tissue'],
            ['title' => 'Hot Stone'],
            ['title' => 'Thai'],
            ['title' => 'Shiatsu'],
            ['title' => 'Sports'],
            ['title' => 'Couples'],
            ['title' => 'Hydrotherapy'],
        ];
        DB::table('services')->insert($data);
    }
}
