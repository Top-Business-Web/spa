<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
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
                'top_title' => 'spa',
                'top_title_ar' => 'سبا',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'spa2',
                'top_title_ar' => 'سبا2',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum. ',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down2',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '2',
            ],
            [
                'top_title' => 'spa3',
                'top_title_ar' => 'سبا3',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '3',
            ],
            [
                'top_title' => 'spa4',
                'top_title_ar' => 'سبا4',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '4',
            ],
        ];
        DB::table('pages')->insert($data);
    }
}
