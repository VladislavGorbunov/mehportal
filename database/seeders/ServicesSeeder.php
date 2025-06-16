<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Алмазно-расточные работы',
            'slug'        => 'almazno-rastochnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Горизонтально-расточные работы',
            'slug'        => 'gorizontalno-rastochnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Долбёжная обработка',
            'slug'        => 'dolbyozhnaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Заточка инструмента',
            'slug'        => 'zatochka-instrumenta',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Зубодолбёжная обработка',
            'slug'        => 'zubodolbyozhnaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Зубофрезерная обработка',
            'slug'        => 'zubofrezernaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

    }
}
