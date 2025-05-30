<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            'name' => 'Владислав',
            'lastname' => 'Горбунов',
            'company' => 'Технопром',
            'inn' => 1235453,
            'region_id' => 1,
            'adress' => 'dsfdsfdsfsdf',
            'contact_person' => 'dfgfdgdfg',
            'phone' => 4535345345345,
            'extension_number' => 321,
            'email' => 'limitorg2016@yandex.ru',
            'password' => Hash::make('Vadya2011!'),
        ]);
    }
}
