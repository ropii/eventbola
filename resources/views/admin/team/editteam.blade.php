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
Edit Team
@endsection
@section('content')
<div class="container p-4">
  <h1 class="text-center">Edit Team</h1>
  <form class="" action="/admin/team/{{$team->id}}/update" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
  <div class="row">

    <div class="col-lg-6">
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" class="form-control" value={{$team->nama}}><br>
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" value={{$team->tempat_lahir}}><br>
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" value={{$team->tanggal_lahir}}><br>
        <label>Kebangsaan</label>
        <input type="text" name="kebangsaan" placeholder="Kebangsaan" class="form-control" value={{$team->kebangsaan}}><br>
        <label>Klub</label>
        <input type="text" name="klub" placeholder="Klub" class="form-control" value={{$team->klub}}><br>
        <label>Posisi</label>
        <input type="text" name="posisi" placeholder="Posisi" class="form-control" value={{$team->posisi}}<br>
        <label>NO Punggung</label>
        <input type="number" name="no_punggung" placeholder="No Punggung" class="form-control" value={{$team->no_punggung}}><br>
        <label>Tinggi</label>
        <input type="number" name="tinggi" placeholder="Tinggi" class="form-control" value={{$team->tinggi}}><br>
        <label for="foto">Upload Photo</label><br>
        <input type="file" class="form-control" id="file" name="file" required>
    </div>

  </div><br>
    <input type="submit" value="Edit Team" class="btn btn-md btn-primary">
    <a href="/admin/team" class="btn btn-md btn-danger">Batalkan</a>
  </form><br><br>
</div>
@endsection
