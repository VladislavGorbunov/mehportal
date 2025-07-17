<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KrasServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Безвоздушная покраска',
            'title_case'  => 'Безвоздушную покраску металла',
            'slug'        => 'bezvozdushnaya-pokraska',
            'category_id' => 11,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Дробеструйная обработка',
            'title_case'  => 'Дробеструйную обработку металла',
            'slug'        => 'drobestruynaya-obrabotka',
            'category_id' => 11,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Обработка в галтовочном барабане',
            'title_case'  => 'Обработку металла в галтовочном барабане',
            'slug'        => 'obrabotka-v-galtovochnom-barabane',
            'category_id' => 11,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Обработка в дробемёте',
            'title_case'  => 'Обработку металла в дробемёте',
            'slug'        => 'obrabotka-v-drobemyote',
            'category_id' => 11,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Пескоструйная обработка',
            'title_case'  => 'Пескоструйную обработку металла',
            'slug'        => 'peskostruynaya-obrabotka',
            'category_id' => 11,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Покраска кистью',
            'title_case'  => 'Покраску металла кистью',
            'slug'        => 'pokraska-kistyu',
            'category_id' => 11,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Покраска краскопультом',
            'title_case'  => 'Покраску металла краскопультом',
            'slug'        => 'pokraska-kraskopultom',
            'category_id' => 11,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Порошковая покраска',
            'title_case'  => 'Порошковую покраску металла',
            'slug'        => 'poroshkovaya-pokraska',
            'category_id' => 11,
            'active'      => true,
        ]);

    }
}
