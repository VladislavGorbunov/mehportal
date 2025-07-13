<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HimServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Азотирование',
            'title_case'  => 'Азотирование металла',
            'slug'        => 'azotirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Алитирование',
            'title_case'  => 'Алитирование металла',
            'slug'        => 'alitirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Анодирование',
            'title_case'  => 'Анодирование металла',
            'slug'        => 'anodirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Борирование',
            'title_case'  => 'Борирование металла',
            'slug'        => 'borirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Бороалитирование',
            'title_case'  => 'Бороалитирование металла',
            'slug'        => 'boroalitirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Газодинамическое напыление',
            'title_case'  => 'Газодинамическое напыление металла',
            'slug'        => 'gazodinamicheskoe-napylenie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Газотермическое напыление',
            'title_case'  => 'Газотермическое напыление металла',
            'slug'        => 'gazotermicheskoe-napylenie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гальваническое покрытие медью',
            'title_case'  => 'Гальваническое покрытие металла медью',
            'slug'        => 'galvanicheskoe-pokrytie-medyu',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гальваническое покрытие никелем',
            'title_case'  => 'Гальваническое покрытие металла никелем',
            'slug'        => 'galvanicheskoe-pokrytie-nikelem',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гальваническое покрытие хромом',
            'title_case'  => 'Гальваническое покрытие металла хромом',
            'slug'        => 'galvanicheskoe-pokrytie-hromom',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гальваническое покрытие цинком',
            'title_case'  => 'Гальваническое покрытие металла цинком',
            'slug'        => 'galvanicheskoe-pokrytie-cinkom',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Карбонитрация',
            'title_case'  => 'Карбонитрация металла',
            'slug'        => 'karbonitraciya',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Микродуговое оксидирование (МДО)',
            'title_case'  => 'Микродуговое оксидирование (МДО)',
            'slug'        => 'mikrodugovoe-oksidirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Многослойное покрытие медью и никелем',
            'title_case'  => 'Многослойное покрытие металла медью и никелем',
            'slug'        => 'mnogosloynoe-pokrytie-medyu-i-nikelem',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Многослойное покрытие медью, никелем и хромом',
            'title_case'  => 'Многослойное покрытие металла медью, никелем и хромом',
            'slug'        => 'mnogosloynoe-pokrytie-medyu-nikelem-i-hromom',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Нитроцементация',
            'title_case'  => 'Нитроцементацию металла',
            'slug'        => 'nitrocementaciya',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Оксидирование',
            'title_case'  => 'Оксидирование металла',
            'slug'        => 'oksidirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Плакирование',
            'title_case'  => 'Плакирование металла',
            'slug'        => 'plakirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Силицирование',
            'title_case'  => 'Силицирование металла',
            'slug'        => 'silicirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Термодиффузионное цинкование',
            'title_case'  => 'Термодиффузионное цинкование металла',
            'slug'        => 'termodiffuzionnoe-cinkovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Травление металла',
            'title_case'  => 'Травление металла',
            'slug'        => 'travlenie-metalla',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Химическое фосфатирование',
            'title_case'  => 'Химическое фосфатирование металла',
            'slug'        => 'himicheskoe-fosfatirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Хромосилицирование',
            'title_case'  => 'Хромосилицирование металла',
            'slug'        => 'hromosilicirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Цементация',
            'title_case'  => 'Цементацию металла',
            'slug'        => 'cementaciya',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Цианирование',
            'title_case'  => 'Цианирование металла',
            'slug'        => 'cianirovanie',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Электролитно-плазменная полировка',
            'title_case'  => 'Электролитно-плазменную полировку',
            'slug'        => 'elektrolitno-plazmennaya-polirovka',
            'category_id' => 3,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Электрохимическая полировка металла',
            'title_case'  => 'Электрохимическую полировку металла',
            'slug'        => 'elektrohimicheskaya-polirovka-metalla',
            'category_id' => 3,
            'active'      => true,
        ]);

    }
}