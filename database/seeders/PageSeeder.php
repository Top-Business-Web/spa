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
            // ----------------------------------------------------------------
            // massage service
            // ----------------------------------------------------------------
            [
                'top_title' => 'Relaxation massage',
                'top_title_ar' => 'مساج استرخائي',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'Stress relief massage',
                'top_title_ar' => 'التدليك لتخفيف التوتر',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum. ',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down2',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'Swedish massage',
                'top_title_ar' => 'التدليك السويدية',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'Stone massage',
                'top_title_ar' => 'تدليك الحجر',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'Sport massage',
                'top_title_ar' => 'التدليك الرياضي',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'Reflexology massage',
                'top_title_ar' => 'التدليك الانعكاسي',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'Chair massage',
                'top_title_ar' => 'تدليك الكرسي',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],
            [
                'top_title' => 'Head massage',
                'top_title_ar' => 'تدليك الرأس',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '1',
            ],

            // ----------------------------------------------------------------
            // Body treatment service
            // ----------------------------------------------------------------
            [
                'top_title' => 'Moroccan bath',
                'top_title_ar' => 'حمام مغربي',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '2',
            ],
            [
                'top_title' => 'Turkish bath',
                'top_title_ar' => 'حمام تركي',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '2',
            ],
            [
                'top_title' => 'White musk bath',
                'top_title_ar' => 'حمام المسك الأبيض',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '2',
            ],
            [
                'top_title' => 'Body scrub steam',
                'top_title_ar' => 'فرك الجسم بالبخار',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '2',
            ],
            [
                'top_title' => 'Body wrap ',
                'top_title_ar' => 'لف الجسم',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '2',
            ],
        ];
        DB::table('pages')->insert($data);
    }
}
