<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BoletosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = range(1,59999);
        foreach ($arrays as $valor) {
          DB::table('boletos')->insert([
            'boleto' => $valor
          ]);
        }
    }
}
