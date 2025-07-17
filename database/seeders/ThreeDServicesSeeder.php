<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreeDServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title'       => '3D-печать по технологии 3DP',
            'title_case'  => '3D-печать по технологии 3DP',
            'slug'        => '3d-pechat-po-tehnologii-3dp',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии BJ',
            'title_case'  => '3D-печать по технологии BJ',
            'slug'        => '3d-pechat-po-tehnologii-bj',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии DLP',
            'title_case'  => '3D-печать по технологии DLP',
            'slug'        => '3d-pechat-po-tehnologii-dlp',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии DMD',
            'title_case'  => '3D-печать по технологии DMD',
            'slug'        => '3d-pechat-po-tehnologii-dmd',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии DMLS',
            'title_case'  => '3D-печать по технологии DMLS',
            'slug'        => '3d-pechat-po-tehnologii-dmls',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии DMT',
            'title_case'  => '3D-печать по технологии DMT',
            'slug'        => '3d-pechat-po-tehnologii-dmt',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии EBF3',
            'title_case'  => '3D-печать по технологии EBF3',
            'slug'        => '3d-pechat-po-tehnologii-ebf3',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии EBM',
            'title_case'  => '3D-печать по технологии EBM',
            'slug'        => '3d-pechat-po-tehnologii-ebm',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии FDM/FFF',
            'title_case'  => '3D-печать по технологии FDM/FFF',
            'slug'        => '3d-pechat-po-tehnologii-fdmfff',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии LOM',
            'title_case'  => '3D-печать по технологии LOM',
            'slug'        => '3d-pechat-po-tehnologii-lom',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии MBJ',
            'title_case'  => '3D-печать по технологии MBJ',
            'slug'        => '3d-pechat-po-tehnologii-mbj',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии SHS',
            'title_case'  => '3D-печать по технологии SHS',
            'slug'        => '3d-pechat-po-tehnologii-shs',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии SLA',
            'title_case'  => '3D-печать по технологии SLA',
            'slug'        => '3d-pechat-po-tehnologii-sla',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии SLM',
            'title_case'  => '3D-печать по технологии SLM',
            'slug'        => '3d-pechat-po-tehnologii-slm',
            'category_id' => 10,
            'active'      => true,
        ]);

        DB::table('services')->insert([
            'title'       => '3D-печать по технологии SLS',
            'title_case'  => '3D-печать по технологии SLS',
            'slug'        => '3d-pechat-po-tehnologii-sls',
            'category_id' => 10,
            'active'      => true,
        ]);

    }
}
