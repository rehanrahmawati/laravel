<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $buku = new Buku;
        $buku->judul = 'Belajar PHP';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini adalah .......';
        $buku->status =1;
        $buku->save();

        $buku->judul = 'ayokkk laravel';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka 2';
        $buku->synopsis = 'ini adalah synopsis.......';
        $buku->status =1;
        $buku->save();

        $buku->judul = 'Belajar PHP 3';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka 3';
        $buku->synopsis = 'ini adalah synopsis 3.......';
        $buku->status =1;
        $buku->save();

        $buku->judul = 'Belajar PHP 4';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka 4';
        $buku->synopsis = 'ini adalah synopsis 4.......';
        $buku->status =1;
        $buku->save();

        $buku->judul = 'Belajar PHP 5';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia Pustaka 5';
        $buku->synopsis = 'ini adalah synopsis 5.......';
        $buku->status =1;
        $buku->save();

    }
}
