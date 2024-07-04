<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MFoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_food_category')->insert([
            [
                'name' => 'Pempek',
                'code' => 'PEM',
                'created_at' => '2024-06-10 13:13:38',
                'created_by' => null,
                'updated_at' => null,
                'updated_by' => null,
            ],
            [
                'name' => 'Pempek Set',
                'code' => 'PES',
                'created_at' => '2024-06-10 13:14:03',
                'created_by' => null,
                'updated_at' => null,
                'updated_by' => null,
            ],
            [
                'name' => 'Indomie',
                'code' => 'IMI',
                'created_at' => '2024-06-10 13:14:23',
                'created_by' => null,
                'updated_at' => null,
                'updated_by' => null,
            ],
            [
                'name' => 'Cemilan',
                'code' => 'CEM',
                'created_at' => '2024-06-10 13:14:34',
                'created_by' => null,
                'updated_at' => null,
                'updated_by' => null,
            ],
            [
                'name' => 'Minuman',
                'code' => 'MIN',
                'created_at' => '2024-06-10 13:14:48',
                'created_by' => null,
                'updated_at' => null,
                'updated_by' => null,
            ],
            [
                'name' => 'Aneka Ais',
                'code' => 'AIS',
                'created_at' => '2024-06-10 13:15:03',
                'created_by' => null,
                'updated_at' => null,
                'updated_by' => null,
            ],
            [
                'name' => 'Coffee - Tea',
                'code' => 'C&T',
                'created_at' => '2024-06-10 13:15:21',
                'created_by' => null,
                'updated_at' => null,
                'updated_by' => null,
            ],
        ]);
    }
}
