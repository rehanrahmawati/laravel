<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(){
        $siswa = Siswa::all();
        return $siswa;
    }
    public function show($id){
        $siswa = Siswa::find($id);
        return $siswa;
    }
    public function create($nama,$nis){
        $siswa = new Siswa();
        $siswa->nama =$nama;
        $siswa->nis=$nis;
        $siswa->kelas="11-rpl3";
        $siswa->jurusan="rpl";
        $siswa->alamat="cilebak";
        $siswa->tgl_lahir="2005-07-05";
        $siswa->save();
        return $siswa;
    }
    public function update($id,$nama,$nis){
        $siswa = Siswa::find($id);
        $siswa->nama = $nama; 
        $siswa->nis= $nis;
        $siswa->kelas="11-rpl3";
        $siswa->jurusan="rpl";
        $siswa->alamat="tarate";
        $siswa->tgl_lahir="2006-09-05";
        $siswa->save();
        return $siswa;
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
       return $siswa;
    }
    public function hitungsiswa(){
        $siswa = Siswa::count();
        return $siswa;
    }
}
