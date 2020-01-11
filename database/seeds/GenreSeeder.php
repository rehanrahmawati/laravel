<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $genre = new Genre;
        $genre->tema = 'Belajar Laravel';
        $genre->horror = 'Si manis jembatan ancol';
        $genre->romance = 'Dua garis biru';
        $genre->fantasi = 'King and Queen';
        $genre->komedi = 'Susah sinyal';
        $genre->save();
    }
}
