<table width="100%" border="1">
  <tr>
    <th>No</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Kebangsaan</th>
        <th>Klub</th>
        <th>Posisi</th>
        <th>No Punggung</th>
        <th>Tinggi</th>
  </tr>
  <?php
    $no = 1;
    $team = \App\Team::get();
    foreach($team as $myteam){
  ?>

  <tr>
    <td>{{$no++}}</td>
    <td>{{$myteam->nama}}</td>
    <td>{{$myteam->tempat_lahir}}</td>
    <td>{{$myteam->tanggal_lahir}}</td>
    <td>{{$myteam->kebangsaan}}</td>
    <td>{{$myteam->klub}}</td>
    <td>{{$myteam->posisi}}</td>
    <td>{{$myteam->no_punggung}}</td>
    <td>{{$myteam->tinggi}}</td>
  </tr>
<?php } ?>
</table>