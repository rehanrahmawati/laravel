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



