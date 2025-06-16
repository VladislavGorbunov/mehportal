<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTarifsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers_tarifs')->insert([
            'title' => 'Базовый тариф',
            'description' => 'Тариф «Базовый» подразумевает бесплатное размещение заказов в неограниченном количестве. Ваши контакты при этом доступны только иполнителям с платным тарифом.',
            'price_year' => 0,
            'price_half_year' => 0,
            'price_three_months' => 0,
            'price_month' => 0
        ]);

        DB::table('customers_tarifs')->insert([
            'title' => 'Заказчик плюс',
            'description' => 'Тариф «Заказчик плюс» подразумевает бесплатное размещение заказов в неограниченном количестве, а так же приоритетное размещение заказов в каталоге. Ваши контакты при этом доступны всем иполнителям.',
            'price_year' => 65000,
            'price_half_year' => 36000,
            'price_three_months' => 20000,
            'price_month' => 6000
        ]);
    }
}
