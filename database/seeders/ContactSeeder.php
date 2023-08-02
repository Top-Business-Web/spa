<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
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
                'name' => 'Abdullah Alhumsi',
                'email' => 'admin@admin.com',
                'phone' => '01061994948',
                'subject' => 'Massage',
                'description' => 'Officia adipisicing nulla non culpa. Aliqua et id aliqua adipisicing cillum exercitation exercitation mollit laborum. Irure excepteur nulla nulla ullamco cupidatat velit. Laborum ex officia elit adipisicing.'
            ],
            [
                'name' => 'Abdullah Eldapour',
                'email' => 'admin1@admin.com',
                'phone' => '01061994947',
                'subject' => 'Massage',
                'description' => 'Officia adipisicing nulla non culpa. Aliqua et id aliqua adipisicing cillum exercitation exercitation mollit laborum. Irure excepteur nulla nulla ullamco cupidatat velit. Laborum ex officia elit adipisicing.'
            ],
            [
                'name' => 'Osama Arafa',
                'email' => 'admin2@admin.com',
                'phone' => '01061994946',
                'subject' => 'Massage',
                'description' => 'Officia adipisicing nulla non culpa. Aliqua et id aliqua adipisicing cillum exercitation exercitation mollit laborum. Irure excepteur nulla nulla ullamco cupidatat velit. Laborum ex officia elit adipisicing.'
            ],
        ];
        DB::table('contacts')->insert($data);
    }
}
