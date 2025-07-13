<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TerServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Дисперсное твердение',
            'title_case'  => 'Дисперсное твердение',
            'slug'        => 'dispersnoe-tverdenie',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'ТВЧ закалка металла',
            'title_case'  => 'ТВЧ закалку металла',
            'slug'        => 'tvch-zakalka-metalla',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Криогенная обработка',
            'title_case'  => 'Криогенную обработку',
            'slug'        => 'kriogennaya-obrabotka',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Лазерное термоупрочнение',
            'title_case'  => 'Лазерное термоупрочнение',
            'slug'        => 'lazernoe-termouprochnenie',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Нормализация металла',
            'title_case'  => 'Нормализацию металла',
            'slug'        => 'normalizaciya-metalla',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Объёмная закалка',
            'title_case'  => 'Объёмную закалку',
            'slug'        => 'obyomnaya-zakalka',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Отжиг металла',
            'title_case'  => 'Отжиг металла',
            'slug'        => 'otzhig-metalla',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Отпуск металла',
            'title_case'  => 'Отпуск металла',
            'slug'        => 'otpusk-metalla',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Поверхностная закалка',
            'title_case'  => 'Поверхностную закалку',
            'slug'        => 'poverhnostnaya-zakalka',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сорбитизация металла',
            'title_case'  => 'Сорбитизацию металла',
            'slug'        => 'sorbitizaciya-metalla',
            'category_id' => 2,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Улучшение металла',
            'title_case'  => 'Улучшение металла',
            'slug'        => 'uluchshenie-metalla',
            'category_id' => 2,
            'active'      => true,
        ]);

    }
}
