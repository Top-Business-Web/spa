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

            // ----------------------------------------------------------------
            // Facial treatment service
            // ----------------------------------------------------------------

            [
                'top_title' => 'Deep cleansing facial',
                'top_title_ar' => 'تنظيف عميق للوجه',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '3',
            ], [
                'top_title' => 'Customized facial',
                'top_title_ar' => 'تجميل الوجه',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '3',
            ], [
                'top_title' => 'Anti aging facial',
                'top_title_ar' => 'مكافحة الشيخوخة في الوجه',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '3',
            ], [
                'top_title' => 'Whitening facial',
                'top_title_ar' => 'تبييض الوجه',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '3',
            ], [
                'top_title' => 'Face massage',
                'top_title_ar' => 'تدليك الوجه',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '3',
            ], [
                'top_title' => 'Natural Masks',
                'top_title_ar' => 'أقنعة طبيعية',
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '3',
            ],

        ];
        // ----------------------------------------------------------------
        // Hairdressing service
        // ----------------------------------------------------------------
        $en_hairdressing = ['Women haircuts',
            'Children haircuts',
            'Hair trimming for women',
            'Hair trimming for children',
            'Washing hair',
            'Blow dry',
            'Straightness',
            'Blow dry+ straightness',
            'braids',
        ];
        $ar_hairdressing = ['حلاقة النساء',
            'حلاقة شعر الأطفال',
            'قص الشعر للسيدات',
            'قص الشعر للاطفال',
            'غسل الشعر',
            'جاف',
            'استقامة',
            'سشوار + استقامة',
            'الضفائر',
        ];
        foreach ($en_hairdressing as $key => $value) {
            $data [] = [
                'top_title' => $value,
                'top_title_ar' => $ar_hairdressing[$key],
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '4',
            ];
        }

        // ----------------------------------------------------------------
        // Hair coloring service
        // ----------------------------------------------------------------
        $en_coloring = ['Hair coloring one color / two colors for:Short hair Medium hair Tall hair ',
            'Full Highlight',
            'Roots coloring',
            'Partial highlight',
        ];
        $ar_coloring = ['صبغ الشعر لون واحد / لونين من أجل: شعر قصير الشعر المتوسط شعر طويل ',
            'تمييز كامل',
            'تلوين الجذور',
            'تسليط الضوء الجزئي',
        ];
        foreach ($en_coloring as $key => $value) {
            $data [] = [
                'top_title' => $value,
                'top_title_ar' => $ar_coloring[$key],
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '5',
            ];
        }

        // ----------------------------------------------------------------
        // Treatment service
        // ----------------------------------------------------------------
        $en_treatment = [
            'Protein',
            'Short',
            'Medium',
            'Tall',
            'Keratin',
            'Short',
            'Medium',
            'Tall',
            'Masks ( treat your hair )',
        ];
        $ar_treatment = [
            'بروتين',
            'قصير',
            'واسطة',
            'طويل',
            'كيراتين',
            'قصير',
            'واسطة',
            'طويل',
            'أقنعة (عالجي شعرك)',
        ];
        foreach ($en_treatment as $key => $value) {
            $data [] = [
                'top_title' => $value,
                'top_title_ar' => $ar_treatment[$key],
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '6',
            ];
        }

        // ----------------------------------------------------------------
        // Waxing services
        // ----------------------------------------------------------------
        $en_waxing = [
            'Full body',
            'Full arms',
            'Half arms',
            'Full arms',
            'Half legs',
            'Full legs',
            'Back + stomach',
            'Under arm',
            'Bikini line',
            'Full bikini',
            'Back',
            'Belly',
            'Neck',
            'FACE',
            'Half body ( full legs + full arms ) ',
        ];
        $ar_waxing = [
            'جسم كامل',
            'كامل الذراعين',
            'نصف ذراع',
            'كامل الذراعين',
            'نصف أرجل',
            'أرجل كاملة',
            'الظهر + المعدة',
            'تحت الذراع',
            'خط البكيني',
            'بيكيني كامل',
            'خلف',
            'بطن',
            'رقبة',
            'وجه',
            'نصف الجسم (رجلين كاملتين + ذراعين كاملين)',
        ];
        foreach ($en_waxing as $key => $value) {
            $data [] = [
                'top_title' => $value,
                'top_title_ar' => $ar_waxing[$key],
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '7',
            ];
        }

        // ----------------------------------------------------------------
        // p.m services
        // ----------------------------------------------------------------
        $en_pm = [
          'Classic Manicure +Pedicure',
          'Manicure',
          'Pedicure',
          'Polish',
          'Filing',
          'Filing+Polish',
          'Paraffin mask for hands / feet',
          'P.+ mask',
          'M.+mask',
        ];
        $ar_pm = [
           'مانيكير وباديكير كلاسيكي',
           'صباغة الاظافر',
           'باديكير',
           'تلميع',
           'الايداع',
           'الايداع + البولندية',
           'قناع البارافين لليدين / القدمين',
           'P. + قناع',
           'م + قناع',
        ];
        foreach ($en_pm as $key => $value) {
            $data [] = [
                'top_title' => $value,
                'top_title_ar' => $ar_pm[$key],
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '8',
            ];
        }

        // ----------------------------------------------------------------
        // Gel & Acrylic  services
        // ----------------------------------------------------------------
        $en_gel = [
          'Gel Manicure+Gel Pedicure',
          'Gel Manicure',
          'Gel Pedicure',
          'Gel Polish',
          'New Set Gel French',
          'Gel Treatment',
          'False Nails',
          'Gel Glitter ( one finger)',
          'Filing Gel',
          'Refill Gel',
          'Refill Without Gel Polish',
          'Remover Gel Polish',
          'New Set TipOr Form',
          'New Set Acrylic French',
          'Filing Acrylic',
          'Refill Acrylic',
          'Refill French',
          'Acrylic Glitter(One Finger)',
          'Remover Acrylic',
        ];
        $ar_gel = [
          'جل مانيكير + جل باديكير',
          'جل مانيكير',
          'جل باديكير',
          'جل البولندية',
          'نيو سيت جل فرنسي',
          'علاج جل',
          'الأظافر الزائفة',
          'جل جليتر (اصبع واحد)',
          'جل برد',
          'جل إعادة التعبئة',
          'عبوة بدون جل البولندية',
          'جل المزيل',
          'مجموعة جديدة أو نموذج',
          'نيو سيت أكريليك فرنسي',
          'ايداع اكريليك',
          'عبوة أكريليك',
          'عبوة الفرنسية',
          'الاكريليك بريق (إصبع واحد)',
          'مزيل أكريليك',
        ];
        foreach ($en_gel as $key => $value) {
            $data [] = [
                'top_title' => $value,
                'top_title_ar' => $ar_gel[$key],
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '9',
            ];
        }


        // ----------------------------------------------------------------
        // Threading  services
        // ----------------------------------------------------------------
        $en_threading = [
            'Full Face',
            'Full Face without Eyebrows',
            'Eyebrows + upper lip',
            'Eyebrows',
            'HALF face',
            'Upper Lip',
        ];
        $ar_threading = [
            'وجه كامل',
            'وجه كامل بدون حواجب',
            'الحاجب + الشفة العليا',
            'الحاجبين',
            'نصف وجه',
            'الشفة العليا',
        ];
        foreach ($en_threading as $key => $value) {
            $data [] = [
                'top_title' => $value,
                'top_title_ar' => $ar_threading[$key],
                'top_description' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'top_description_ar' => 'Laboris proident eu sint amet sunt ut anim exercitation excepteur fugiat deserunt. Do aliqua ut sint labore do sit esse reprehenderit excepteur eu veniam elit. Exercitation do et eiusmod ut aliqua labore reprehenderit non. Sint veniam pariatur duis Lorem consequat consectetur. Eu pariatur ea irure eu esse ipsum cillum.',
                'down_title' => 'spa down3',
                'down_title_ar' => 'العنوان السفلي',
                'down_description' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'down_description_ar' => 'Incididunt amet aute amet laboris consequat consequat dolore non enim nulla aute et nisi ea. Excepteur aute et cillum fugiat reprehenderit ullamco officia labore minim quis ea consectetur. Labore ipsum eu incididunt aliqua enim laboris consequat mollit qui eiusmod laboris est. Nulla nisi eiusmod non sit ut non ex aliqua.',
                'category_id' => '10',
            ];
        }


        DB::table('pages')->insert($data);
    }
}
