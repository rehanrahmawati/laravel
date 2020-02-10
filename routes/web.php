<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Buku;
Route::get('tampil', function () {
    return Buku::all();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'erna maung bandung';
});

Route::get('/', function (){
    return 'page 1';
});

Route::get('/', function () {
    return 'page 2';
});

Route::get('/', function (){
    return 'page 3';
});

Route::get('ini pesan', function (){
    return 'page 4';
});

Route::get('variable', function (){
    $data1 = 'ini variable data 1 ';
    $data2 = 'ini variable data 2 ';
    $data3 = 'ini variable data 3 ';
    $data4 = 'ini variable data 4 ';
    $data5 = 'ini variable data 5 ';
    return $data1. '<br>' .$data2. '<br>' .$data3. '<br>' .$data4. '<br>' .$data5;

});

Route::get('angkot/{jurusan}/{harga}', function (){
    $jurusan = 'cibaduyut - karang setra';
    $data = 'angkot jurusan:';
    $bayar = '2k';
    return $data .' '.$jurusan. ' '.$bayar;
});

Route::get('user/{nama}/{alamat}/{nomor}', function ($nama,$alamat,$nomor){
    return 'halo ' .$nama. 'alamatnya' .$alamat. 'nomor' .$nomor;
});
  
Route::get('user/{nama}/{nilai?}', function ($nama,$nilai = 'nilai kamu kosong dan tidak mempunyai grade'){
    if($nilai >= 50 ){
        echo "grade A ";
    }
    else if($nilai >= 40 && $nilai < 50){
        echo "grade B ";
    }
    else if($nilai >= 30 && $nilai < 40){
        echo "grade C ";
    }
    else if($nilai >= 20 && $nilai < 30){
        echo "grade D ";
    }
    else if($nilai == 'null'){
        echo "  ";
    }
    return 'hai ' .$nama. ' nilai : ' .$nilai;
});

Route::get('contoh','BukuController@latihan');
Route::get('profil','BukuController@latihan2');
Route::get('profil2','BukuController@latihan3');
Route::get('profil3','BukuController@latihan4');
Route::get('biodata','BukuController@biodata');
Route::get('menu/{mkn}','BukuController@parameter1');
Route::get('menu1/{mkn?}','BukuController@parameter2');
Route::get('pesan/{mkn?}','BukuController@parameter3');
Route::get('pesan1/{mkn?}/{minum?}','BukuController@parameter4');
Route::get('pesan2/{mkn?}/{minum?}/{harga?}','BukuController@parameter5');
Route::get('get-buku','BukuController@index');
Route::get('get-buku2','BukuController@show');
Route::get('tabel','BukuController@buat_data');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('update-buku/{id}/{judul}','BukuController@update');
Route::get('hitung-buku','BukuController@hitungbuku');
Route::get('get-siswa','SiswaController@index');
Route::get('get-siswa2/{id}','SiswaController@show');
Route::get('buat-siswa/{nama}/{nis}','SiswaController@create');
Route::get('delete-siswa/{id}','SiswaController@delete');
Route::get('update-siswa/{id}/{nama}/{nis}','SiswaController@update');
Route::get('hitung-siswa','SiswaController@hitungsiswa');

// passing data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('status/{a}','PracticeController@status');
Route::get('status1/{a?}','PracticeController@status1');
Route::get('buku','PracticeController@loop');

// Book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//gaji
Route::get('penggajihan','GajiController@index');
Route::get('penggajihan/{id}','GajiController@show');

//blade
Route::get('/profil',function(){
    return view('profil');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/blog',function(){
    return view('blog');
});

//Relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1',function(){
    #temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim','=','1015015072')->first();

    #tampilkan nama wali mahsiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2',function(){
    $mahasiswa = Mahasiswa::where('nim','=','1015015072')->first();
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3',function(){
    $dosen = Dosen::where('nama','=','Abdul Musthafa')->first();
    foreach ($dosen->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama . 
    '<strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4',function(){
$novay = Mahasiswa::where('nama','=','Noviyanto Rachmadi')->first();
foreach ($novay->hobi as $temp)
echo '<li>' . $temp->hobi . '</li>';
});

Route::get('relasi-5', function(){
$mandi_hujan = Hobi::where('hobi','=','Mandi hujan')->first();
foreach ($mandi_hujan->mahasiswa as $temp)
echo '<li> Nama : ' . $temp->nama . 
'<strong>' . $temp->nim . '</strong></li>';
});

Route::get('eloquent',function(){
    $data = Mahasiswa::with('wali','dosen','hobi')->get();
    return view('eloquent',compact('data'));
});




