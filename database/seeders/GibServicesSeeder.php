<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GibServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Вальцовка листового металла',
            'title_case'  => 'Вальцовку листового металла',
            'slug'        => 'valcovka-listovogo-metalla',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Вальцовка профиля',
            'title_case'  => 'Вальцовку профиля',
            'slug'        => 'valcovka-profilya',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Вальцовка пруткового металла',
            'title_case'  => 'Вальцовку пруткового металла',
            'slug'        => 'valcovka-prutkovogo-metalla',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Вальцовка труб',
            'title_case'  => 'Вальцовку труб',
            'slug'        => 'valcovka-trub',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-гибка проволоки',
            'title_case'  => '3D-гибку проволоки',
            'slug'        => '3d-gibka-provoloki',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гибка листового металла',
            'title_case'  => 'Гибку листового металла',
            'slug'        => 'gibka-listovogo-metalla',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гибка металла на прессе',
            'title_case'  => 'Гибку металла на прессе',
            'slug'        => 'gibka-metalla-na-presse',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гибка профиля',
            'title_case'  => 'Гибку профиля',
            'slug'        => 'gibka-profilya',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гибка пруткового металла',
            'title_case'  => 'Гибку пруткового металла',
            'slug'        => 'gibka-prutkovogo-metalla',
            'category_id' => 6,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гибка труб',
            'title_case'  => 'Гибку труб',
            'slug'        => 'gibka-trub',
            'category_id' => 6,
            'active'      => true,
        ]);

    }
}
