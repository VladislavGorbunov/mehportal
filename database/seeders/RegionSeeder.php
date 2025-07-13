<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->delete();

        DB::table('regions')->insert([
            'name' => 'Алтайский край',
            'name_in' => 'в Алтайском крае',
            'slug' => 'barnaul',
        ]);

        DB::table('regions')->insert([
            'name' => 'Белгородская область',
            'name_in' => 'в Белгородской области',
            'slug' => 'belgorod',
        ]);

        DB::table('regions')->insert([
            'name' => 'Брянская область',
            'name_in' => 'в Брянской области',
            'slug' => 'bryansk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Брянская область',
            'name_in' => 'в Брянской области',
            'slug' => 'bryansk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Владимирская область',
            'name_in' => 'во Владимирской области',
            'slug' => 'vladimir',
        ]);

        DB::table('regions')->insert([
            'name' => 'Волгоградская область',
            'name_in' => 'в Волгоградской области',
            'slug' => 'volgograd',
        ]);

        DB::table('regions')->insert([
            'name' => 'Вологодская область',
            'name_in' => 'в Вологодской области',
            'slug' => 'vologda',
        ]);

        DB::table('regions')->insert([
            'name' => 'Воронежская область',
            'name_in' => 'в Воронежской области',
            'slug' => 'voronezh',
        ]);

        DB::table('regions')->insert([
            'name' => 'Донецкая Народная Республика',
            'name_in' => 'в Донецкой Народной Республику',
            'slug' => 'donetsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Запорожская область',
            'name_in' => 'в Запорожской области',
            'slug' => 'melitopol',
        ]);

        DB::table('regions')->insert([
            'name' => 'Ивановская область',
            'name_in' => 'в Ивановской области',
            'slug' => 'ivanovo',
        ]);

        DB::table('regions')->insert([
            'name' => 'Иркутская область',
            'name_in' => 'в Иркутской области',
            'slug' => 'irkutsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Кабардино-Балкарская Республика',
            'name_in' => 'в Кабардино-Балкарской Республике',
            'slug' => 'nalchik',
        ]);

        DB::table('regions')->insert([
            'name' => 'Калужская область',
            'name_in' => 'в Калужской области',
            'slug' => 'kaluga',
        ]);

        DB::table('regions')->insert([
            'name' => 'Кемеровская область',
            'name_in' => 'в Кемеровской области',
            'slug' => 'kemerovo',
        ]);

        DB::table('regions')->insert([
            'name' => 'Кировская область',
            'name_in' => 'в Кировской области',
            'slug' => 'kirov',
        ]);

        DB::table('regions')->insert([
            'name' => 'Костромская область',
            'name_in' => 'в Костромской области',
            'slug' => 'kostroma',
        ]);

        DB::table('regions')->insert([
            'name' => 'Краснодарский край',
            'name_in' => 'в Краснодарском крае',
            'slug' => 'krasnodar',
        ]);
    }
}
