<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LitServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Жаропрочное литье',
            'title_case'  => 'Жаропрочное литье',
            'slug'        => 'zharoprochnoe-lite',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Жаропрочное литье сплавов и сталей',
            'title_case'  => 'Жаропрочное литье сплавов и сталей',
            'slug'        => 'zharoprochnoe-lite-splavov-i-staley',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Изготовление отливок из чугуна',
            'title_case'  => 'Изготовление отливок из чугуна',
            'slug'        => 'izgotovlenie-otlivok-iz-chuguna',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье алюминия и сплавов алюминия',
            'title_case'  => 'Литье алюминия и сплавов алюминия',
            'slug'        => 'lite-alyuminiya-i-splavov-alyuminiya',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье в жидкие самотвердеющие смеси (ЖСС)',
            'title_case'  => 'Литье в жидкие самотвердеющие смеси (ЖСС)',
            'slug'        => 'lite-v-zhidkie-samotverdeyushchie-smesi',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье в керамические формы',
            'title_case'  => 'Литье в керамические формы',
            'slug'        => 'lite-v-keramicheskie-formy',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье в шаблонные формы',
            'title_case'  => 'Литье в шаблонные формы',
            'slug'        => 'lite-v-shablonnye-formy',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье по легко выплавляемым моделям (ЛВМ)',
            'title_case'  => 'Литье по легко выплавляемым моделям (ЛВМ)',
            'slug'        => 'lite-po-legko-vyplavlyaemym-modelyam',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье по легко газифицируемым моделям (ЛГМ)',
            'title_case'  => 'Литье по легко газифицируемым моделям (ЛГМ)',
            'slug'        => 'lite-po-legko-gazificiruemym-modelyam',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье по чертежам заказчика',
            'title_case'  => 'Литье по чертежам заказчика',
            'slug'        => 'lite-po-chertezham-zakazchika',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье под давлением',
            'title_case'  => 'Литье под давлением',
            'slug'        => 'lite-pod-davleniem',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье с вакуумно-плёночной формовкой',
            'title_case'  => 'Литье с вакуумно-плёночной формовкой',
            'slug'        => 'lite-s-vakuumno-plyonochnoy-formovkoy',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье с вакуумной формовкой',
            'title_case'  => 'Литье с вакуумной формовкой',
            'slug'        => 'lite-s-vakuumnoy-formovkoy',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье со стопочной формовкой',
            'title_case'  => 'Литье со стопочной формовкой',
            'slug'        => 'lite-so-stopochnoy-formovkoy',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье со стопочной формовкой',
            'title_case'  => 'Литье со стопочной формовкой',
            'slug'        => 'lite-so-stopochnoy-formovkoy',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье в холоднотвердеющие смеси',
            'title_case'  => 'Литье в холоднотвердеющие смеси',
            'slug'        => 'lite-v-holodnotverdeyushchie-smesi',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Центробежное литье',
            'title_case'  => 'Центробежное литье',
            'slug'        => 'centrobezhnoe-lite',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Центробежное электрошлаковое литье (ЦЭШЛ)',
            'title_case'  => 'Центробежное электрошлаковое литье (ЦЭШЛ)',
            'slug'        => 'centrobezhnoe-elektroshlakovoe-lite',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Электрошлаковое литье (ЭШЛ)',
            'title_case'  => 'Электрошлаковое литье (ЭШЛ)',
            'slug'        => 'elektroshlakovoe-lite',
            'category_id' => 8,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Литье в кокиль',
            'title_case'  => 'Литье в кокиль',
            'slug'        => 'lite-v-kokil',
            'category_id' => 8,
            'active'      => true,
        ]);
    }
}
