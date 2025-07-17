<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProchServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => 'Лазерная гравировка',
            'title_case'  => 'Лазерную гравировку',
            'slug'        => 'lazernaya-gravirovka',
            'category_id' => 14,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Маркировка плазмой',
            'title_case'  => 'Маркировку плазмой',
            'slug'        => 'markirovka-plazmoy',
            'category_id' => 14,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => 'Перемотка рулонов металла',
            'title_case'  => 'Перемотку рулонов металла',
            'slug'        => 'peremotka-rulonov-metalla',
            'category_id' => 14,
            'active'      => true,
        ]);
       
    }
}
