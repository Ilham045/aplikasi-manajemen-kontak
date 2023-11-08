@extends('layouts.main')

@section('title', 'Contact')

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card mt-4">
                <div class="card-header">
                  <h3 class="card-title"><strong>Daftar Kontak</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="/contact-create" class="btn btn-primary btn-sm float-right">Tambah Kontak <i class="fa fa-plus"></i></a>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="text-center">
                      <th>Nama Kontak</th>
                      <th>Email</th>
                      <th>Nomor Telepon</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contact as $item)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="/contact-edit/{{ $item->id }}" class="btn btn-info btn-sm"><i class="fa fa-thin fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm hapus-contact" data-id="{{ $item->id }}" data-nama="{{ $item->name }}"><i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    
@endsection