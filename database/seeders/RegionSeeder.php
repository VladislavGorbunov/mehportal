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

        DB::table('regions')->insert([
            'name' => 'Красноярский край',
            'name_in' => 'в Красноярском крае',
            'slug' => 'krsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Курганская область',
            'name_in' => 'в Курганской области',
            'slug' => 'kurgan',
        ]);

        DB::table('regions')->insert([
            'name' => 'Курская область',
            'name_in' => 'в Курской области',
            'slug' => 'kursk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Липецкая область',
            'name_in' => 'в Липецкой области',
            'slug' => 'lipetsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Луганская Народная Республика',
            'name_in' => 'в Луганской Народной Республике',
            'slug' => 'lugansk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Москва и Московская область',
            'name_in' => 'в Москвe и Московской области',
            'slug' => 'msk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Нижегородская область',
            'name_in' => 'в Нижегородской области',
            'slug' => 'nn',
        ]);

        DB::table('regions')->insert([
            'name' => 'Новгородская область',
            'name_in' => 'в Новгородской области',
            'slug' => 'novgorod',
        ]);

        DB::table('regions')->insert([
            'name' => 'Новосибирская область',
            'name_in' => 'в Новосибирской области',
            'slug' => 'nsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Омская область',
            'name_in' => 'в Омской области',
            'slug' => 'omsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Оренбургская область',
            'name_in' => 'в Оренбургской области',
            'slug' => 'orenburg',
        ]);

        DB::table('regions')->insert([
            'name' => 'Орловская область',
            'name_in' => 'в Орловской области',
            'slug' => 'orel',
        ]);

        DB::table('regions')->insert([
            'name' => 'Пензенская область',
            'name_in' => 'в Пензенской области',
            'slug' => 'penza',
        ]);

        DB::table('regions')->insert([
            'name' => 'Пермский край',
            'name_in' => 'в Пермском крае',
            'slug' => 'perm',
        ]);

        DB::table('regions')->insert([
            'name' => 'Приморский край',
            'name_in' => 'в Приморском крае',
            'slug' => 'vl',
        ]);

        DB::table('regions')->insert([
            'name' => 'Псковская область',
            'name_in' => 'в Псковской области',
            'slug' => 'pskov',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Адыгея',
            'name_in' => 'в Республике Адыгея',
            'slug' => 'maikop',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Башкортостан',
            'name_in' => 'в Республике Башкортостан',
            'slug' => 'ufa',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Дагестан',
            'name_in' => 'в Республике Дагестан',
            'slug' => 'makhachkala',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Карелия',
            'name_in' => 'в Республике Карелия',
            'slug' => 'ptz',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Коми',
            'name_in' => 'в Республике Коми',
            'slug' => 'syktyvkar',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Крым',
            'name_in' => 'в Республике Крым',
            'slug' => 'simf',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Марий Эл',
            'name_in' => 'в Республике Марий Эл',
            'slug' => 'yoshkarola',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Мордовия',
            'name_in' => 'в Республике Мордовия',
            'slug' => 'saransk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Татарстан',
            'name_in' => 'в Республике Татарстан',
            'slug' => 'kazan',
        ]);

        DB::table('regions')->insert([
            'name' => 'Республика Хакасия',
            'name_in' => 'в Республике Хакасия',
            'slug' => 'abakan',
        ]);

        DB::table('regions')->insert([
            'name' => 'Ростовская область',
            'name_in' => 'в Ростовской области',
            'slug' => 'rostov',
        ]);

        DB::table('regions')->insert([
            'name' => 'Рязанская область',
            'name_in' => 'в Рязанской области',
            'slug' => 'ryazan',
        ]);

        DB::table('regions')->insert([
            'name' => 'Самарская область',
            'name_in' => 'в Самарской области',
            'slug' => 'samara',
        ]);

        DB::table('regions')->insert([
            'name' => 'Санкт-Петербург и ЛО',
            'name_in' => 'в Санкт-Петербурге и ЛО',
            'slug' => 'spb',
        ]);

        DB::table('regions')->insert([
            'name' => 'Саратовская область',
            'name_in' => 'в Саратовской области',
            'slug' => 'saratov',
        ]);

        DB::table('regions')->insert([
            'name' => 'Свердловская область',
            'name_in' => 'в Свердловской области',
            'slug' => 'ekb',
        ]);

        DB::table('regions')->insert([
            'name' => 'Смоленская область',
            'name_in' => 'в Смоленской области',
            'slug' => 'smolensk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Ставропольский край',
            'name_in' => 'в Ставропольском крае',
            'slug' => 'stav',
        ]);

        DB::table('regions')->insert([
            'name' => 'Тамбовская область',
            'name_in' => 'в Тамбовской области',
            'slug' => 'tambov',
        ]);

        DB::table('regions')->insert([
            'name' => 'Тверская область',
            'name_in' => 'в Тверской области',
            'slug' => 'tver',
        ]);

        DB::table('regions')->insert([
            'name' => 'Томская область',
            'name_in' => 'в Томской области',
            'slug' => 'tomsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Тульская область',
            'name_in' => 'в Тульской области',
            'slug' => 'tula',
        ]);

        DB::table('regions')->insert([
            'name' => 'Тюменская область',
            'name_in' => 'в Тюменской области',
            'slug' => 'tumen',
        ]);

        DB::table('regions')->insert([
            'name' => 'Удмуртская Республика',
            'name_in' => 'в Удмуртской Республике',
            'slug' => 'izhevsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Ульяновская область',
            'name_in' => 'в Ульяновской области',
            'slug' => 'ul',
        ]);

        DB::table('regions')->insert([
            'name' => 'Хабаровский край',
            'name_in' => 'в Хабаровском крае',
            'slug' => 'khabarovsk',
        ]);

        DB::table('regions')->insert([
            'name' => 'Ханты-Мансийский АО — Югра',
            'name_in' => 'в Ханты-Мансийском АО — Югра',
            'slug' => 'khanty',
        ]);

        DB::table('regions')->insert([
            'name' => 'Челябинская область',
            'name_in' => 'в Челябинской области',
            'slug' => 'chel',
        ]);

        DB::table('regions')->insert([
            'name' => 'Челябинская область',
            'name_in' => 'в Челябинской области',
            'slug' => 'chel',
        ]);

        DB::table('regions')->insert([
            'name' => 'Чувашская Республика',
            'name_in' => 'в Чувашской Республике',
            'slug' => 'cheboksary',
        ]);

        DB::table('regions')->insert([
            'name' => 'Ярославская область',
            'name_in' => 'в Ярославской области',
            'slug' => 'yaroslavl',
        ]);
    }
}
