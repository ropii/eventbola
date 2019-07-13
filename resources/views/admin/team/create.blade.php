@extends('Layout.lte')
@section('css')
  <style>

    .container{
      background: white;
      border-radius: 4px;
    }
  </style>
@endsection
@section('header')
Tambah Team
@endsection
@section('content')
<div class="container p-4">
  <h1 class="text-center">Tambah Team</h1>
  <form action="/admin/team" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="row">

    @if(count($errors) > 0)
        <div class="alert alert-danger">
          Upload File Error <br><br>
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif

      <div class="col-lg-6">
          <label>Nama</label>
          <input type="text" name="nama" placeholder="Nama" class="form-control"><br>
          <label>Tempat Lahir</label>
          <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control"><br>
          <label>Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control"><br>
          <label>Kebangsaan</label>
          <input type="text" name="kebangsaan" placeholder="Kebangsaan" class="form-control"></br>
          <label>Klub</label>
          <input type="text" name="klub" placeholder="Klub" class="form-control"><br>     
          <label>Posisi</label>
          <input type="text" name="posisi" placeholder="Posisi" class="form-control"><br>
          <label>No Punggung</label>
          <input type="number" name="no_punggung" placeholder="No Punggung" class="form-control"><br>
          <label>Tinggi</label>
          <input type="number" name="tinggi" placeholder="Tinggi" class="form-control"><br>    
          <label for="foto">Upload Photo</label>
          <input type="file" class="form-control" id="file" name="file" required>
      </div>

  </div><br>
    <input type="submit" value="Tambah " class="btn btn-md btn-primary">
    <a href="/admin/team" class="btn btn-md btn-danger">Batalkan</a>
  </form><br><br>
</div>
@endsection
