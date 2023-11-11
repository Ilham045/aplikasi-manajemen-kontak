@extends('layouts.app')
  
@section('title', 'Kelompok 1 - Aplikasi Manajemen Kontak')
  
@section('contents')
  <div class="row">
    <style>
      table {
          border-collapse: collapse;
          width: 65%;
      }
      
      table, th, td {
          border: 1px solid black;
      }
      </style>
      
    <table>
      <thead>
          <tr>
          <th>Nama Kelompok</th>
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
