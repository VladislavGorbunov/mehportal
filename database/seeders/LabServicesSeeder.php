<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Визуально-измерительный контроль',
            'title_case'  => 'Визуально-измерительный контроль',
            'slug'        => 'vizualno-izmeritelnyy-kontrol',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Исследование порошковых материалов',
            'title_case'  => 'Исследование порошковых материалов',
            'slug'        => 'issledovanie-poroshkovyh-materialov',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Контроль проникающими веществами',
            'title_case'  => 'Контроль проникающими веществами',
            'slug'        => 'kontrol-pronikayushchimi-veshchestvami',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Магнитопорошковый контроль',
            'title_case'  => 'Магнитопорошковый контроль',
            'slug'        => 'magnitoporoshkovyy-kontrol',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Металлография',
            'title_case'  => 'Металлографию',
            'slug'        => 'metallografiya',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Определение остаточных напряжений',
            'title_case'  => 'Определение остаточных напряжений',
            'slug'        => 'opredelenie-ostatochnyh-napryazheniy',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Определение предела прочности на растяжение',
            'title_case'  => 'Определение предела прочности на растяжение',
            'slug'        => 'opredelenie-predela-prochnosti-na-rastyazhenie',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Определение предела прочности на сжатие',
            'title_case'  => 'Определение предела прочности на сжатие',
            'slug'        => 'opredelenie-predela-prochnosti-na-szhatie',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Определение предела текучести',
            'title_case'  => 'Определение предела текучести',
            'slug'        => 'opredelenie-predela-tekuchesti',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Определение твердости',
            'title_case'  => 'Определение твердости',
            'slug'        => 'opredelenie-tverdosti',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Определение ударной вязкости',
            'title_case'  => 'Определение ударной вязкости',
            'slug'        => 'opredelenie-udarnoy-vyazkosti',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Определение усталостной прочности',
            'title_case'  => 'Определение усталостной прочности',
            'slug'        => 'opredelenie-ustalostnoy-prochnosti',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Радиографический контроль',
            'title_case'  => 'Радиографический контроль',
            'slug'        => 'radiograficheskiy-kontrol',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Термический анализ',
            'title_case'  => 'Термический анализ',
            'slug'        => 'termicheskiy-analiz',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Ультразвуковая толщинометрия',
            'title_case'  => 'Ультразвуковую толщинометрию',
            'slug'        => 'ultrazvukovaya-tolshchinometriya',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Ультразвуковой контроль',
            'title_case'  => 'Ультразвуковой контроль',
            'slug'        => 'ultrazvukovoy-kontrol',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Химический анализ',
            'title_case'  => 'Химический анализ',
            'slug'        => 'himicheskiy-analiz',
            'category_id' => 12,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Электронная микроскопия',
            'title_case'  => 'Электронную микроскопию',
            'slug'        => 'elektronnaya-mikroskopiya',
            'category_id' => 12,
            'active'      => true,
        ]);

    }
}
