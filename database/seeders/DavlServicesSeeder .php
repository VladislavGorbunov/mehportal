<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DavlServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Волочение',
            'title_case'  => 'Волочение металла',
            'slug'        => 'volochenie',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Вырубка металла',
            'title_case'  => 'Вырубку металла',
            'slug'        => 'vyrubka-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Ковка металла',
            'title_case'  => 'Ковку металла',
            'slug'        => 'kovka-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Листовая штамповка',
            'title_case'  => 'Листовую штамповку',
            'slug'        => 'listovaya-shtampovka',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Объёмная штамповка',
            'title_case'  => 'Объёмную штамповку',
            'slug'        => 'obyomnaya-shtampovka',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Перфорация металла',
            'title_case'  => 'Перфорацию металла',
            'slug'        => 'perforaciya-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Правка плоского металлопроката',
            'title_case'  => 'Правку плоского металлопроката',
            'slug'        => 'pravka-ploskogo-metalloprokata',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Прессование металла',
            'title_case'  => 'Прессование металла',
            'slug'        => 'pressovanie-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Пробивка металла',
            'title_case'  => 'Пробивку металла',
            'slug'        => 'probivka-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Прокатка металла',
            'title_case'  => 'Прокатку металла',
            'slug'        => 'prokatka-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Пуклевание',
            'title_case'  => 'Пуклевание металла',
            'slug'        => 'puklevanie-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Раскатка',
            'title_case'  => 'Раскатку металла',
            'slug'        => 'raskatka-metalla',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Раскрой металла на координатно-пробивном прессе',
            'title_case'  => 'Раскрой металла на координатно-пробивном прессе',
            'slug'        => 'raskroy-metalla-na-koordinatno-probivnom-presse',
            'category_id' => 4,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Художественная ковка',
            'title_case'  => 'Художественную ковка',
            'slug'        => 'hudozhestvennaya-kovka',
            'category_id' => 4,
            'active'      => true,
        ]);
    }
}
