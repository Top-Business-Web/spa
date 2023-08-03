<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(GellariesSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(SliderSeeder::class);
    }
}