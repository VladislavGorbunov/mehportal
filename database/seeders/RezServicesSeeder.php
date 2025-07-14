<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RezServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Газовая резка металла',
            'title_case'  => 'Газовую резку металла',
            'slug'        => 'gazovaya-rezka-metalla',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Гидроабразивная резка',
            'title_case'  => 'Гидроабразивную резку металла',
            'slug'        => 'gidroabrazivnaya-rezka',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Лазерная резка',
            'title_case'  => 'Лазерную резку металла',
            'slug'        => 'lazernaya-rezka',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Плазменная резка',
            'title_case'  => 'Плазменную резку металла',
            'slug'        => 'plazmennaya-rezka',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Поперечная резка рулонной стали',
            'title_case'  => 'Поперечную резку рулонной стали',
            'slug'        => 'poperechnaya-rezka-rulonnoy-stali',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Продольная резка рулонной стали',
            'title_case'  => 'Продольную резку рулонной стали',
            'slug'        => 'prodolnaya-rezka-rulonnoy-stali',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Резка арматуры',
            'title_case'  => 'Резку арматуры',
            'slug'        => 'rezka-armatury',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Резка на ленточнопильном станке',
            'title_case'  => 'Резку на ленточнопильном станке',
            'slug'        => 'rezka-na-lentochnopilnom-stanke',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Резка пресс-ножницами',
            'title_case'  => 'Резку пресс-ножницами',
            'slug'        => 'rezka-press-nozhnicami',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Рубка на гильотинных ножницах',
            'title_case'  => 'Рубку на гильотинных ножницах',
            'slug'        => 'rubka-na-gilotinnyh-nozhnicah',
            'category_id' => 5,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Фигурная резка труб',
            'title_case'  => 'Фигурную резку труб',
            'slug'        => 'figurnaya-rezka-trub',
            'category_id' => 5,
            'active'      => true,
        ]);

    }
}
