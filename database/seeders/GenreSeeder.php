<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'id'=> 1,
            'name' => 'Action'
        ]);
        Genre::create([
            'id' => 2,
            'name' => 'Comedia'
        ]);
    }
}
