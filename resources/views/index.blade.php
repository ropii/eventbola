@extends('Layout.master')
@section('css')
<style>
        .header{
            background-image: url('https://theunn.com/wp-content/uploads/2018/09/ICC-world-cup.jpg');
            height: 350px;
            width: 100%;
            background-repeat: no-repeat;
        }
        .subJudul{
            font-family: roboto;
            letter-spacing: 5px;
        }
        .Judul{
            font-family: roboto;
            padding-top: 6%;
        }
    </style>
@endsection

@section('header')
<div class="header text-center text-light">
    <h1 class="Judul">UAS Framework</h1>
    <p class="subJudul">" Bersama Bola Tingkatkan Kemampuanmu "</p>
    <hr color="white" width="60%">
    <button class="btn btn-primary" onclick="location.href='event'">Lihat Semua Pertandingan</button>
</div><br>
@endsection

@section('content')
<div class="container text-center">
      <h2>Tingkatkan Kemampuanmu</h2>
      <p>Belajar Bersama Kami, Team Bola</p>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2>Daftar Team</h2>
          <img width="27%" src="http://icons.iconarchive.com/icons/blackvariant/button-ui-system-folders-alt/512/Group-icon.png" alt=""><br>
          Daftar team pemain yang tergabung dan siap bertanding.
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2>Portofolio</h2>
          <img width="27%" src="https://www.getvalify.com/hubfs/Lucro_Images/solutions-icon-regional.png" alt=""><br>
          Project Yang sudah kami garap selama ini
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2>About</h2>
          <img width="27%" src="http://maxim.co.za/wp-content/uploads/2015/04/Icon-About-250x250.png" alt=""><br>
          Kami hanya manusia biasa yang tak luput dr dosa.
        </div>
      </div>
    </div><br>
    <div class="container  text-center">
      <h2>Daftar pertandingan</h2>
      <p>Hari ini</p>
        <div class="row">
            @foreach($event as $events)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card" >
                    <img class="card-img-top" width="100px" height="200px" src="../uploads/{{$events->foto}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$events->nama}}</h5>
                        <p class="card-text">{{$events->keterangan}}</p>
                        <a href="users/{{$events->id}}/detailevent" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div><br>
@endsection

@section('js')
@endsection