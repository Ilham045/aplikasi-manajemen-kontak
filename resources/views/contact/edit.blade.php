@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('contact.update', $contacts->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $contacts->name }}" >
            </div>
        </div>
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $contacts->email }}" >
        </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">No Telepon</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $contacts->phone }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection