<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'genre_id'=>1,
            'title'=>'Rápidos y Furiosos X',
            'rating' => '9',
            'awards' => '3',
            'release_year' => '2020',
            'length' => '120',
        ]);
        Movie::create([
            'genre_id'=>2,
            'title'=>'Son como niños',
            'rating' => '7',
            'awards' => '0',
            'release_year' => '2016',
            'length' => '120',
        ]);
    }
}
