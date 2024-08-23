<?php

namespace Database\Seeders;

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

        DB::table('users')->insert([
            'name' => 'Tamires Grigoleto dos Santos',
            'email' => 'tamires.grigoleto@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Maria Aparecida Gedolin',
            'email' => 'mariaaparecida@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Maria Luísa Grigoleto dos Santos',
            'email' => 'malu@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Enide Novello dos Santos',
            'email' => 'enidenovello@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Joyce dos Santos Zanelatto',
            'email' => 'joycezanelatto@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Gisele Aparecida Novello dos Santos',
            'email' => 'gisele@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Israel Rosalino dos Santos',
            'email' => 'israel.rosalino@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Guilherme Henrique Menegatti',
            'email' => 'guimenegatti@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Beatriz Menegatti',
            'email' => 'bia.menegatti@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Maria Vitória dos Santos Menegatti',
            'email' => 'mavi@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Alice dos Santos Zanelatto',
            'email' => 'alice.zanelatto@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Maria de Lourdes Alcantara dos Santos',
            'email' => 'volourde@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Cleonice dos Santos Honório',
            'email' => 'tiacleo@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Benedito Honório',
            'email' => 'tioticao@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'David Honório',
            'email' => 'davi.honorio@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);

        DB::table('users')->insert([
            'name' => 'Juliana Honório',
            'email' => 'ju.honorio@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'permissions' => 'products',
        ]);
    }
}
