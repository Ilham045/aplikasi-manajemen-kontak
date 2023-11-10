@extends('layouts.app')
<<<<<<< HEAD

@section('title', 'Kelompok 1 - Aplikasi Manajemen Kontak')

@section('contents')
  <div class="row">
    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Kelompok</th>
          <th>Jumlah Anggota</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Kelompok A</td>
          <td>10</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Kelompok B</td>
          <td>8</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
=======
  
<<<<<<< HEAD
@section('title', 'Kelompok 1 - Aplikasi Manajemen Kontak')
=======
@section('title', 'Dashboard - Aplikasi Manajemen Kontak')
>>>>>>> 3cef919a2bf6bd796282cae55794363a1ec7215f
  
@section('contents')
  <div class="row">
    <style>
      table {
          border-collapse: collapse;
          width: 50%;
      }
      
      table, th, td {
          border: 1px solid black;
      }
      </style>
      
    <table>
      <thead>
          <tr>
              <th>Nama</th>
              <th>NIM</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>Ilham Firmansyah</td>
              <td>220658302003</td>
          </tr>
          <tr>
              <td>Yunisa Wulandari</td>
              <td>220658302005</td>
          </tr>
          <tr>
            <td>Dewi Siti Aminah</td>
            <td>220658302013</td>
        </tr>
        <tr>
          <td>Marhaini</td>
          <td>220658302017</td>
      </tr>
      </tbody>
  </table>
  
  </div>
@endsection

>>>>>>> 6a18678b139443f3ec4335e24079ec1dab883208
