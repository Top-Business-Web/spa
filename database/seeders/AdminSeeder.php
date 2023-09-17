<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
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
                'name' => 'Abdullah Eldapour',
                'email' => 'admin@admin.com',
                'password' => bcrypt    ('123456'),
                'image' => 'assets/admin/images/users/avatar-2.jpg',
            ],
            [
                'name' => 'Abdullah Alhumsi',
                'email' => 'admin1@admin.com',
                'password' => bcrypt('123456'),
                'image' => 'assets/admin/images/users/avatar-6.jpg',
            ],
            [
                'name' => 'Osama Arafa',
                'email' => 'admin2@admin.com',
                'password' => bcrypt('123456'),
                'image' => 'assets/admin/images/users/avatar-3.jpg',
            ],
        ];
        DB::table('admins')->insert($data);
    }
}
