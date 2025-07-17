<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IzgServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Изготовление валов',
            'title_case'  => 'Изготовление валов',
            'slug'        => 'izgotovlenie-valov',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление втулок',
            'title_case'  => 'Изготовление втулок',
            'slug'        => 'izgotovlenie-vtulok',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление шестерен и зубчатых колес',
            'title_case'  => 'Изготовление шестерен и зубчатых колес',
            'slug'        => 'izgotovlenie-shesteren-i-zubchatyh-koles',
            'category_id' => 13,
            'active'      => true,
        ]);
        
        DB::table('services')->insert([
            'title'       => 'Изготовление деталей по образцам заказчика',
            'title_case'  => 'Изготовление деталей по образцам заказчика',
            'slug'        => 'izgotovlenie-detaley-po-obrazcam-zakazchika',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление деталей по чертежам заказчика',
            'title_case'  => 'Изготовление деталей по чертежам заказчика',
            'slug'        => 'izgotovlenie-detaley-po-chertezham-zakazchika',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление ёмкостей и резервуаров',
            'title_case'  => 'Изготовление ёмкостей и резервуаров',
            'slug'        => 'izgotovlenie-yomkostey-i-rezervuarov',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление закладных деталей',
            'title_case'  => 'Изготовление закладных деталей',
            'slug'        => 'izgotovlenie-zakladnyh-detaley',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление изделий из алюминия',
            'title_case'  => 'Изготовление изделий из алюминия',
            'slug'        => 'izgotovlenie-izdeliy-iz-alyuminiya',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление изделий из арматуры',
            'title_case'  => 'Изготовление изделий из арматуры',
            'slug'        => 'izgotovlenie-izdeliy-iz-armatury',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление изделий из нержавеющей стали',
            'title_case'  => 'Изготовление изделий из нержавеющей стали',
            'slug'        => 'izgotovlenie-izdeliy-iz-nerzhaveyushchey-stali',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление изделий из оцинкованной стали',
            'title_case'  => 'Изготовление изделий из оцинкованной стали',
            'slug'        => 'izgotovlenie-izdeliy-iz-ocinkovannoy-stali',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление изделий из титана',
            'title_case'  => 'Изготовление изделий из титана',
            'slug'        => 'izgotovlenie-izdeliy-iz-titana',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление крепежа и метизов',
            'title_case'  => 'Изготовление крепежа и метизов',
            'slug'        => 'izgotovlenie-krepezha-i-metizov',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление нестандартных металлоконструкций',
            'title_case'  => 'Изготовление нестандартных металлоконструкций',
            'slug'        => 'izgotovlenie-nestandartnyh-metallokonstrukciy',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление типовых металлоконструкций',
            'title_case'  => 'Изготовление типовых металлоконструкций',
            'slug'        => 'izgotovlenie-tipovyh-metallokonstrukciy',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление модельной оснастки',
            'title_case'  => 'Изготовление модельной оснастки',
            'slug'        => 'izgotovlenie-modelnoy-osnastki',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление пружин',
            'title_case'  => 'Изготовление пружин',
            'slug'        => 'izgotovlenie-pruzhin',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление технологической оснастки',
            'title_case'  => 'Изготовление технологической оснастки',
            'slug'        => 'izgotovlenie-tehnologicheskoy-osnastki',
            'category_id' => 13,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление штампов и пресс-форм',
            'title_case'  => 'Изготовление штампов и пресс-форм',
            'slug'        => 'izgotovlenie-shtampov-i-press-form',
            'category_id' => 13,
            'active'      => true,
        ]);

        
    }
}
