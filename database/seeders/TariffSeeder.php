<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers_tariffs')->insert([
            'title'  => 'Premium 1',
            'months' => '1',
            'price'  => '4500',
            'active' => 1,
            'active' => true,
        ]);

        DB::table('customers_tariffs')->insert([
            'title'  => 'Premium 6',
            'months' => '6',
            'price'  => '24000',
            'active' => 1,
            'active' => true,
        ]);

        DB::table('customers_tariffs')->insert([
            'title'  => 'Premium 12',
            'months' => '12',
            'price'  => '42000',
            'active' => 1,
            'active' => true,
        ]);


        DB::table('executors_tariffs')->insert([
            'title'  => 'Premium 1',
            'months' => '1',
            'price'  => '4500',
            'active' => 1,
            'active' => true,
        ]);

        DB::table('executors_tariffs')->insert([
            'title'  => 'Premium 6',
            'months' => '6',
            'price'  => '24000',
            'active' => 1,
            'active' => true,
        ]);

        DB::table('executors_tariffs')->insert([
            'title'  => 'Premium 12',
            'months' => '12',
            'price'  => '42000',
            'active' => 1,
            'active' => true,
        ]);
    }
}
