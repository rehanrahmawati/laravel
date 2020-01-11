<?php

use App\Isi;
use Illuminate\Database\Seeder;

class IsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $isi = new Isi;
        $isi->prolog = 'Ini adalah prolog';
        $isi->pengantar = 'ini adalah pengantar nya';
        $isi->bab = 'bab membuat laravel';
        $isi->penutup = 'sekian dan terima kasih';
        $isi->epilog = 'belajar laravel itu sulit';
        $isi->save();
    }
}
