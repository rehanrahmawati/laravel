<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function latihan(){
        return "ini contoh latihan controller";
    }
    public function latihan2(){
        $a = 'Mahmud';
        $b = 'Zulkarnaen';

        return 'Nama saya adalah ' .$a.' '.$b;
    }
    public function latihan3(){
        $a = "Erna Rahmawati";
        return view('test',compact('a'));
    }
    public function latihan4(){
        $a = "Icip Nirin";
        return view('test2',['nama' => $a]);
    }
    public function biodata(){
        $a = "Erna Rahmawati";
        $b = "Islam";
        $c = "Perempuan";
        $d = "Kp Cilebak";
        $e = "SMK Assaalaam";
        $f = "XI-RPL3";
        $g = "Teknik Informatika";
        $h = "Listen music";
        $i = "16 tahun";
        return view('test3',['nama' => $a,'agama' => $b,'gender' => $c,'alamat' => $d,
        'sekolah' => $e,'kelas' => $f,'jurusan' => $g,'hobi' => $h,'umur' =>$i]);
}
    public function parameter1(){
        $a = "Nasi Kuning";
    return view('parameter1',compact('a'));
}
    public function parameter2($a = "Nasi Padang"){
    return view('parameter2',compact('a'));
    }
    public function parameter3($a = null){
        if(isset($a)){
          $a = "anda memesan $a";
        }
        if(!isset($a)){
          $a = "Anda Belum memesan Sesuatu";
        }
        return view('parameter3',compact('a'));
    }
    public function parameter4($a =null,$b=null){
        if(isset($a)){
          $a = "anda memesan $a";
        }
        if(isset($b,$a)){
            $a= "  $a & $b";
          }
        if(!isset($a)){
          $a = "Anda Belum memesan Sesuatu";
        }
        
        return view('parameter4',compact('a','b'));
    }
    public function parameter5($a =null,$b=null,$c=null){
        if(isset($a)){
          $a = "anda memesan $a";
        }
        if(isset($b,$a)){
            $a= "  $a & $b ";

            if(isset($a,$b,$c)){
            if($c >= 25000){
                $c = "Jumbo";
            }
            else if($c <= 20000 && $c >= 25000){
                $c =  "Medium";
            } 
            else if($c <= 15000 && $c >= 0){
                $c = "small ";
            }
            else{
                $c = "harga failed";
            }
          }
          $a= "  $a  $c ";

        }
        
            if(!isset($a)){
            $a = "Anda Belum memesan Sesuatu";
            }
        
        return view('parameter5',compact('a','b','c'));
    }
    public function index(){
        $buku = Buku::all();
        return $buku;
    }
    public function show($id){
        $buku = Buku::find($id);
        return $buku;
    }
    public function buat_data(){
        $buku = new Buku();
        $buku->judul ="zuuuuu";
        $buku->jumlah_halaman=100;
        $buku->penerbit="maman";
        $buku->synopsis="halaman sinopsis";
        $buku->status=1;
        $buku->save();
        return $buku;
    }
    public function update($id){
        $buku = Buku::find($id);
        $buku->judul ="vvvvvv";
        $buku->jumlah_halaman=100;
        $buku->penerbit="maman";
        $buku->synopsis="halaman sinopsis";
        $buku->status=1;
        $buku->save();
        return $buku;
    }
    public function delete($id){
       $buku = Buku::find($id);
       $buku->delete();
       return $buku;

    }
}
