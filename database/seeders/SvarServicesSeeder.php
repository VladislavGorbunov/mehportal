<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SvarServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Аргонная (аргонодуговая) сварка',
            'title_case'  => 'Аргонную (аргонодуговую) сварку',
            'slug'        => 'argonnaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Газовая сварка',
            'title_case'  => 'Газовую сварку',
            'slug'        => 'gazovaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Газопрессовая сварка',
            'title_case'  => 'Газопрессовую сварку',
            'slug'        => 'gazopressovaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Диффузионная сварка',
            'title_case'  => 'Диффузионную сварку',
            'slug'        => 'diffuzionnaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Дугопрессовая сварка',
            'title_case'  => 'Дугопрессовую сварку',
            'slug'        => 'dugopressovaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Контактная сварка',
            'title_case'  => 'Контактную сварку',
            'slug'        => 'kontaktnaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Кузнечная сварка',
            'title_case'  => 'Кузнечную сварку',
            'slug'        => 'kuznechnaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Лазерная сварка',
            'title_case'  => 'Лазерную сварку',
            'slug'        => 'lazernaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Наплавка',
            'title_case'  => 'Наплавку металла',
            'slug'        => 'naplavka-metalla',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Пайка',
            'title_case'  => 'Пайку металла',
            'slug'        => 'payka-metalla',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Полуавтоматическая дуговая сварка',
            'title_case'  => 'Полуавтоматическую дуговую сварку',
            'slug'        => 'poluavtomaticheskaya-dugovaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Роботизированная сварка',
            'title_case'  => 'Роботизированную сварку',
            'slug'        => 'robotizirovannaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Ручная дуговая сварка',
            'title_case'  => 'Ручную дуговую сварку',
            'slug'        => 'ruchnaya-dugovaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сварка арматуры',
            'title_case'  => 'Сварку арматуры',
            'slug'        => 'svarka-armatury',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сварка взрывом',
            'title_case'  => 'Сварку взрывом',
            'slug'        => 'svarka-vzryvom',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сварка под слоем флюса',
            'title_case'  => 'Сварку под слоем флюса',
            'slug'        => 'svarka-pod-sloem-flyusa',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сварка трением',
            'title_case'  => 'Сварку трением',
            'slug'        => 'svarka-treniem',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Сварка труб',
            'title_case'  => 'Сварку труб',
            'slug'        => 'svarka-trub',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Термитная сварка',
            'title_case'  => 'Термитную сварку',
            'slug'        => 'termitnaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Ультразвуковая сварка',
            'title_case'  => 'Ультразвуковую сварку',
            'slug'        => 'ultrazvukovaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Химическая сварка',
            'title_case'  => 'Химическую сварку',
            'slug'        => 'himicheskaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Холодная сварка',
            'title_case'  => 'Холодную сварку',
            'slug'        => 'holodnaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Электронно-лучевая сварка',
            'title_case'  => 'Электронно-лучевую сварку',
            'slug'        => 'elektronno-luchevaya-svarka',
            'category_id' => 9,
            'active'      => true,
        ]);
    }
}
