<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories_services')->insert([
            'title' => 'Механическая обработка',
            'title_case' => 'Механическую обработку',
            'slug' => 'mehanicheskaya-obrabotka',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Термическая обработка',
            'title_case' => 'Термическую обработку',
            'slug' => 'termicheskaya-obrabotka',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Химико-термическая обработка',
            'title_case' => 'Химико-термическую обработку',
            'slug' => 'himiko-termicheskaya-obrabotka',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Обработка металлов давлением',
            'title_case' => 'Обработку металлов давлением',
            'slug' => 'obrabotka-metallov-davleniem',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Резка металла',
            'title_case' => 'Резку металла',
            'slug' => 'rezka-metalla',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Гибка металла',
            'title_case' => 'Гибку металла',
            'slug' => 'gibka-metalla',
            'active' => true,
        ]);
        
        DB::table('categories_services')->insert([
            'title' => 'Гравировка на металле',
            'title_case' => 'Гравировку на металле',
            'slug' => 'gravirovka-na-metalle',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Литьё металлов',
            'title_case' => 'Литьё металлов',
            'slug' => 'lityo-metallov',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Сварочные работы',
            'title_case' => 'Сварочные работы',
            'slug' => 'svarochnye-raboty',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Покраска и очистка металлов',
            'title_case' => 'Покраску и очистку металлов',
            'slug' => 'pokraska-i-ochistka-metallov',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Лаборатория и контроль',
            'title_case' => 'Лабораторию и контроль',
            'slug' => 'laboratoriya-i-kontrol',
            'active' => true,
        ]);

        DB::table('categories_services')->insert([
            'title' => 'Изготовление деталей',
            'title_case' => 'Изготовление деталей',
            'slug' => 'izgotovlenie-detaley',
            'active' => true,
        ]);

    }
}
