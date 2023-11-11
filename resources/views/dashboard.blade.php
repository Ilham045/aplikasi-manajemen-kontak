@extends('layouts.app')

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
