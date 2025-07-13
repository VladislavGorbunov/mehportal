<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MehServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Алмазно-расточные работы',
            'title_case'  => 'Алмазно-расточные работы',
            'slug'        => 'almazno-rastochnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Горизонтально-расточные работы',
            'title_case'  => 'Горизонтально-расточные работы',
            'slug'        => 'gorizontalno-rastochnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Долбёжная обработка',
            'title_case'  => 'Долбёжную обработку',
            'slug'        => 'dolbyozhnaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Заточка инструмента',
            'title_case'  => 'Заточку инструмента',
            'slug'        => 'zatochka-instrumenta',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Зубодолбёжная обработка',
            'title_case'  => 'Зубодолбёжную обработку',
            'slug'        => 'zubodolbyozhnaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Зубофрезерная обработка',
            'title_case'  => 'Зубофрезерную обработку',
            'slug'        => 'zubofrezernaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Зубошлифовальные работы',
            'title_case'  => 'Зубошлифовальные работы',
            'slug'        => 'zuboshlifovalnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Координатно-расточные работы',
            'title_case'  => 'Координатно-расточные работы',
            'slug'        => 'koordinatno-rastochnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Круглошлифовальные работы',
            'title_case'  => 'Круглошлифовальные работы',
            'slug'        => 'krugloshlifovalnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Механическая обработка на обрабатывающем центре',
            'title_case'  => 'Механическую обработку на обрабатывающем центре',
            'slug'        => 'mehanicheskaya-obrabotka-na-obrabatyvayushchem-centre',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Накатка резьбы',
            'title_case'  => 'Накатку резьбы',
            'slug'        => 'nakatka-rezby',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Нарезание резьбы',
            'title_case'  => 'Нарезание резьбы',
            'slug'        => 'narezanie-rezby',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Плоскошлифовальные работы',
            'title_case'  => 'Плоскошлифовальные работы',
            'slug'        => 'ploskoshlifovalnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Протягивание металла',
            'title_case'  => 'Протягивание металла',
            'slug'        => 'protyagivanie-metalla',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Развертывание отверстий',
            'title_case'  => 'Развертывание отверстий',
            'slug'        => 'razvertyvanie-otverstiy',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Резьбошлифовальные работы',
            'title_case'  => 'Резьбошлифовальные работы',
            'slug'        => 'rezboshlifovalnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сверление отверстий на станках с ЧПУ',
            'title_case'  => 'Сверление отверстий на станках с ЧПУ',
            'slug'        => 'sverlenie-otverstiy-na-stankah-s-chpu',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сверление отверстий на универсальных станках',
            'title_case'  => 'Сверление отверстий на универсальных станках',
            'slug'        => 'sverlenie-otverstiy-na-universalnyh-stankah',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Слесарные работы по металлу',
            'title_case'  => 'Слесарные работы по металлу',
            'slug'        => 'slesarnye-raboty-po-metallu',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Строгальная обработка металла',
            'title_case'  => 'Строгальную обработку металла',
            'slug'        => 'strogalnaya-obrabotka-metalla',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Токарная обработка на станках с ЧПУ',
            'title_case'  => 'Токарную обработку на станках с ЧПУ',
            'slug'        => 'tokarnaya-obrabotka-na-stankah-s-chpu',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Токарная обработка на универсальных станках',
            'title_case'  => 'Токарную обработку на универсальных станках',
            'slug'        => 'tokarnaya-obrabotka-na-universalnyh-stankah',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Токарно-автоматные работы',
            'title_case'  => 'Токарно-автоматные работы',
            'slug'        => 'tokarno-avtomatnye-raboty',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Фрезерная обработка на станках с ЧПУ',
            'title_case'  => 'Фрезерную обработку на станках с ЧПУ',
            'slug'        => 'frezernaya-obrabotka-na-stankah-s-chpu',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Фрезерная обработка на универсальных станках',
            'title_case'  => 'Фрезерную обработку на универсальных станках',
            'slug'        => 'frezernaya-obrabotka-na-universalnyh-stankah',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Хонингование металла',
            'title_case'  => 'Хонингование металла',
            'slug'        => 'honingovanie-metalla',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Шлицефрезерная обработка',
            'title_case'  => 'Шлицефрезерную обработку',
            'slug'        => 'shlicefrezernaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Электроэрозионная обработка',
            'title_case'  => 'Электроэрозионную обработку',
            'slug'        => 'elektroerozionnaya-obrabotka',
            'category_id' => 1,
            'active'      => true,
        ]);

    }
}
