<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
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
                'logo' => '1.jpg',
                'title' => 'SPA',
                'address' => 'Cairo',
                'phone' => '123156452321',
                'email' => 'admin@admin.com',
                'work_hours' => 12,
                'map' => 'egypt',
                'social_links' => json_encode([
                    'facebook' => 'https://www.facebook.com/',
                    'linkedin' => 'https://www.linkedin.com/',
                    'twitter' => 'https://www.twitter.com/',
                    'pinterest' => 'https://www.pinterest.com/',
                    'instagram' => 'https://www.instagram.com/',
                ])
            ]
        ];
        DB::table('settings')->insert($data);
    }
}
