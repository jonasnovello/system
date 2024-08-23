<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Jonas Novello dos Santos',
            'email' => 'jonasnovello@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'banners,products,users,pages,',
        ]);

        User::factory(30)->create();
    }
}
