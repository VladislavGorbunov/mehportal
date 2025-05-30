<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('legal_forms')->insert([
            'name' => 'ООО',
            'full_name' => 'общество с ограниченной ответственностью',
        ]);

        DB::table('legal_forms')->insert([
            'name' => 'НАО',
            'full_name' => 'непубличное акционерное общество',
        ]);

        DB::table('legal_forms')->insert([
            'name' => 'ОАО',
            'full_name' => 'открытое акционерное общество',
        ]);

        DB::table('legal_forms')->insert([
            'name' => 'ПАО',
            'full_name' => 'публичное акционерное общество',
        ]);

        DB::table('legal_forms')->insert([
            'name' => 'ИП',
            'full_name' => 'индивидуальный предприниматель',
        ]);
    }
}
