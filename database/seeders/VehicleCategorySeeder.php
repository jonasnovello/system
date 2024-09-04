<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'Carro'],
            ['title' => 'Caminhão'],
            ['title' => 'Van'],
            ['title' => 'Ônibus'],
            ['title' => 'Moto'],
            ['title' => 'Bicicleta'],
            ['title' => 'Trator'],
            ['title' => 'Reboque'],
            ['title' => 'SUV'],
            ['title' => 'Picape'],
            ['title' => 'Conversível'],
            ['title' => 'Hatchback'],
            ['title' => 'Sedan'],
            ['title' => 'Crossover'],
            ['title' => 'Minivan'],
            ['title' => 'Vagão'],
            ['title' => 'Quadriciclo'],
            ['title' => 'Máquina Agrícola'],
            ['title' => 'Motocicleta Elétrica'],
            ['title' => 'Veículo Elétrico'],
            ['title' => 'Esportivo'],
        ];

        DB::table('vehicles_categories')->insert($categories);
    }
}
