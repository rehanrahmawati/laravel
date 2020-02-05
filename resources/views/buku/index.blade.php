<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Buku</center>
    <table border=1>
          <thead>
             <tr>
                <th>judul</th>
                <th>jumlah_halaman</th>
                <th>penerbit</th>
                <th>synopsis</th>
                <th>status</th>
                <th>action</th>
            </tr>
           </thead>
           <tbody>
           @foreach($buku as $book)
           <tr>
              <td>{{$book->judul}}</td>
              <td>{{$book->jumlah_halaman}}</td>
              <td>{{$book->penerbit}}</td>
              <td>{{$book->synopsis}}</td>
              <td>{{$book->status}}</td>
              <td><a href="/book/{{ $book->id }}">lihat</a></td>
           </tr>
           @endforeach
           </tbody>
           </table>   
</body>
</html>