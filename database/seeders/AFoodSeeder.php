<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('a_food')->insert([
            ['name' => 'Keriting', 'code' => null, 'description' => null, 'price' => 4500, 'id_m_food_category' => 1],
            ['name' => 'Lenjer', 'code' => null, 'description' => null, 'price' => 4500, 'id_m_food_category' => 1],
            ['name' => 'Bulat Adaan', 'code' => null, 'description' => null, 'price' => 4500, 'id_m_food_category' => 1],
            ['name' => 'Balok', 'code' => null, 'description' => null, 'price' => 4500, 'id_m_food_category' => 1],
            ['name' => 'Telor', 'code' => null, 'description' => null, 'price' => 5000, 'id_m_food_category' => 1],
            ['name' => 'Tahu Buntel', 'code' => null, 'description' => null, 'price' => 5500, 'id_m_food_category' => 1],
            ['name' => 'Pistel (Kates)', 'code' => null, 'description' => null, 'price' => 5500, 'id_m_food_category' => 1],
            ['name' => 'Judes', 'code' => null, 'description' => null, 'price' => 6000, 'id_m_food_category' => 1],
            ['name' => 'Otak-Otak', 'code' => null, 'description' => null, 'price' => 6000, 'id_m_food_category' => 1],
            ['name' => 'Sate', 'code' => null, 'description' => null, 'price' => 6000, 'id_m_food_category' => 1],
            ['name' => 'Panggang', 'code' => null, 'description' => null, 'price' => 5000, 'id_m_food_category' => 1],
            ['name' => 'Krispy Kipas', 'code' => null, 'description' => null, 'price' => 5000, 'id_m_food_category' => 1],
            ['name' => 'Kulit Montok', 'code' => null, 'description' => null, 'price' => 5000, 'id_m_food_category' => 1],
            ['name' => 'Krispy Porsi', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 1],
            ['name' => 'Tahu Judes Porsi', 'code' => null, 'description' => null, 'price' => 12000, 'id_m_food_category' => 1],
            ['name' => 'Tekwan Aja', 'code' => null, 'description' => null, 'price' => 22000, 'id_m_food_category' => 2],
            ['name' => 'Tekwan Jumbo', 'code' => null, 'description' => null, 'price' => 25000, 'id_m_food_category' => 2],
            ['name' => 'Tekwan Telur', 'code' => null, 'description' => null, 'price' => 22000, 'id_m_food_category' => 2],
            ['name' => 'Tekwan Tahu', 'code' => null, 'description' => null, 'price' => 22000, 'id_m_food_category' => 2],
            ['name' => 'Tekwan Komplit', 'code' => null, 'description' => 'Tekwan + Tahu + Telur', 'price' => 27000, 'id_m_food_category' => 2],
            ['name' => 'Tekwan Indomie', 'code' => null, 'description' => null, 'price' => 27000, 'id_m_food_category' => 2],
            ['name' => 'Model Telur', 'code' => null, 'description' => 'Pempek Telur + Kuah Tekwan', 'price' => 22000, 'id_m_food_category' => 2],
            ['name' => 'Model Tahu', 'code' => null, 'description' => 'Pempek Tahu + Kuah Tekwan', 'price' => 22000, 'id_m_food_category' => 2],
            ['name' => 'Selam Kuah Cuko', 'code' => null, 'description' => null, 'price' => 25000, 'id_m_food_category' => 2],
            ['name' => 'Selam Kuah Tekwan', 'code' => null, 'description' => null, 'price' => 25000, 'id_m_food_category' => 2],
            ['name' => 'Selam Kuah Tekwan Indomie', 'code' => null, 'description' => null, 'price' => 30000, 'id_m_food_category' => 2],
            ['name' => 'Selam Combo', 'code' => null, 'description' => 'Selam + Pentol Tekwan', 'price' => 30000, 'id_m_food_category' => 2],
            ['name' => 'Selam Combo Indomie', 'code' => null, 'description' => null, 'price' => 30000, 'id_m_food_category' => 2],
            ['name' => 'Pempek Mie Tahu', 'code' => null, 'description' => null, 'price' => 25000, 'id_m_food_category' => 2],
            ['name' => 'Langgang Jumbo', 'code' => null, 'description' => null, 'price' => 25000, 'id_m_food_category' => 3],
            ['name' => 'Pempek Kacang', 'code' => null, 'description' => null, 'price' => 25000, 'id_m_food_category' => 3],
            ['name' => 'Indomie Goreng', 'code' => null, 'description' => null, 'price' => 10000, 'id_m_food_category' => 4],
            ['name' => 'Indomie Goreng Telur', 'code' => null, 'description' => null, 'price' => 15000, 'id_m_food_category' => 4],
            ['name' => 'Indomie Kari', 'code' => null, 'description' => null, 'price' => 10000, 'id_m_food_category' => 4],
            ['name' => 'Indomie Kari Telur', 'code' => null, 'description' => null, 'price' => 15000, 'id_m_food_category' => 4],
            ['name' => 'Kentang Goreng', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 4],
            ['name' => 'Air Mineral', 'code' => null, 'description' => null, 'price' => 5000, 'id_m_food_category' => 5],
            ['name' => 'Ais Jeruk', 'code' => null, 'description' => null, 'price' => 18000, 'id_m_food_category' => 5],
            ['name' => 'Jus Melon', 'code' => null, 'description' => null, 'price' => 18000, 'id_m_food_category' => 5],
            ['name' => 'Jus Semangka', 'code' => null, 'description' => null, 'price' => 18000, 'id_m_food_category' => 5],
            ['name' => 'Milo', 'code' => null, 'description' => null, 'price' => 18000, 'id_m_food_category' => 5],
            ['name' => 'Lemon Tea', 'code' => null, 'description' => null, 'price' => 15000, 'id_m_food_category' => 5],
            ['name' => 'Lemon Squash', 'code' => null, 'description' => null, 'price' => 18000, 'id_m_food_category' => 5],
            ['name' => 'Ais Cendol Aja', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 6],
            ['name' => 'Ais Cincau Aja', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 6],
            ['name' => 'Ais Cendol Cincau', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 6],
            ['name' => 'Ais Cendol Kacang Merah', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 6],
            ['name' => 'Ais Kacang Merah Jadoel', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 6],
            ['name' => 'Ais Campur', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 6],
            ['name' => 'Ais Buah Pelangi', 'code' => null, 'description' => null, 'price' => 25000, 'id_m_food_category' => 6],
            ['name' => 'Teh Tawar', 'code' => null, 'description' => null, 'price' => 3000, 'id_m_food_category' => 7],
            ['name' => 'Teh Manis', 'code' => null, 'description' => null, 'price' => 5000, 'id_m_food_category' => 7],
            ['name' => 'Ais Teh Tawar', 'code' => null, 'description' => null, 'price' => 5000, 'id_m_food_category' => 7],
            ['name' => 'Ais Teh Manis', 'code' => null, 'description' => null, 'price' => 8000, 'id_m_food_category' => 7],
            ['name' => 'Ais Thai Tea', 'code' => null, 'description' => null, 'price' => 15000, 'id_m_food_category' => 7],
            ['name' => 'Ais Coffee Jadoel', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 7],
            ['name' => 'Ais Coffee Milo', 'code' => null, 'description' => null, 'price' => 20000, 'id_m_food_category' => 7],
            ['name' => 'Ais Americano', 'code' => null, 'description' => null, 'price' => 15000, 'id_m_food_category' => 7],
            ['name' => 'Hot Americano', 'code' => null, 'description' => null, 'price' => 15000, 'id_m_food_category' => 7],
        ]);
    }
}
