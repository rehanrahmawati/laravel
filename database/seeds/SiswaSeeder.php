<?php

use Illuminate\Database\Seeder;

use App\Siswa;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = new Siswa;
        $siswa->nama = 'Erna';
        $siswa->nis = 0001;
        $siswa->kelas = '11-rpl3';
        $siswa->jurusan = 'rpl';
        $siswa->alamat ="cilebak";
        $siswa->tgl_lahir ="2003-07-06";
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nama = 'Listi';
        $siswa->nis = 0002;
        $siswa->kelas = '11-rpl3';
        $siswa->jurusan = 'rpl';
        $siswa->alamat ="patrol";
        $siswa->tgl_lahir ="2001-07-06";
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nama = 'Dila';
        $siswa->nis = 0003;
        $siswa->kelas = '11-rpl3';
        $siswa->jurusan = 'rpl';
        $siswa->alamat ="patrol";
        $siswa->tgl_lahir ="2002-05-06";
        $siswa->save();
    }
}
