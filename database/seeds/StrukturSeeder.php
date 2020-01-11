<?php

use App\Struktur;
use Illuminate\Database\Seeder;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $struktur = new Struktur;
        $struktur->tokoh = 'murid';
        $struktur->watak = 'baik';
        $struktur->latar = 'sekolah';
        $struktur->alur = 'maju';
        $struktur->amanat = 'harus sabar';
        $struktur->save();
    }
}
