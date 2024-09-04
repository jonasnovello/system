<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleAutomakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $automakers = [
            ['title' => 'Toyota'],
            ['title' => 'Volkswagen'],
            ['title' => 'Ford'],
            ['title' => 'Honda'],
            ['title' => 'Chevrolet'],
            ['title' => 'Nissan'],
            ['title' => 'BMW'],
            ['title' => 'Mercedes-Benz'],
            ['title' => 'Hyundai'],
            ['title' => 'Audi'],
            ['title' => 'Fiat'],
            ['title' => 'Kia'],
            ['title' => 'Peugeot'],
            ['title' => 'Renault'],
            ['title' => 'Mazda'],
            ['title' => 'Subaru'],
            ['title' => 'Mitsubishi'],
            ['title' => 'Porsche'],
            ['title' => 'Jaguar'],
            ['title' => 'Land Rover'],
            ['title' => 'Volvo'],
            ['title' => 'Tesla'],
            ['title' => 'Ferrari'],
            ['title' => 'Lamborghini'],
            ['title' => 'Bugatti'],
            ['title' => 'Maserati'],
            ['title' => 'Jeep'],
            ['title' => 'Dodge'],
            ['title' => 'Chrysler'],
            ['title' => 'Suzuki'],
            ['title' => 'Citroën'],
            ['title' => 'Acura'],
            ['title' => 'Infiniti'],
            ['title' => 'Alfa Romeo'],
            ['title' => 'Bentley'],
            ['title' => 'Rolls-Royce'],
            ['title' => 'Aston Martin'],
            ['title' => 'Saab'],
            ['title' => 'McLaren'],
            ['title' => 'Pagani'],
            ['title' => 'SEAT'],
            ['title' => 'Skoda'],
            ['title' => 'Lexus'],
            ['title' => 'Genesis'],
            ['title' => 'Ram'],
        ];

        DB::table('vehicles_automaker')->insert($automakers);
    }
}
