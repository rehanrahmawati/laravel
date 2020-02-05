<?php

use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gaji = new Gaji;
        $gaji->nip = 10101010;
        $gaji->nama = "Erna";
        $gaji->agama = 'Islam';
        $gaji->jk = 'perempuan';
        $gaji->alamat ="cilebak";
        $gaji->jabatan ="manager";
        $gaji->jam_kerja =9;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 20202020;
        $gaji->nama = "Listi";
        $gaji->agama = 'Islam';
        $gaji->jk = 'perempuan';
        $gaji->alamat ="katapang";
        $gaji->jabatan ="sekretaris";
        $gaji->jam_kerja =5;
        $gaji->save();
        
        $gaji = new Gaji;
        $gaji->nip = 30303030;
        $gaji->nama = "Dila";
        $gaji->agama = 'Islam';
        $gaji->jk = 'perempuan';
        $gaji->alamat ="nata";
        $gaji->jabatan ="staff";
        $gaji->jam_kerja =12;
        $gaji->save();
    }
}
