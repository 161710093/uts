<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lihat Data Hasil</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  </head>
  <body style="background-color:white">
  <nav class="navbar navbar-default" style="background-color:lime">
  <div class="container-fluid" style="background-color:lime">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
  <div style="background-color: lime" class="collapse navbar-collapse" id="bs-example-navbar-collpase-1">
  <br>
  <ul class="nav nav-pills">
  <li><a href="/utsannisa/data.php"><img src="assalaam.jpg" height="30px">SMK ASSALAAM BANDUNG</a></li>
  <li><a class='btn btn-info' href="/utsannisa/jurusan/lihatdatajurusan.php">Jurusan</a></li>
  <li><a class='btn btn-info' href="/utsannisa/penguji/lihatdatapenguji.php">Penguji</a></li>
  <li><a class='btn btn-info' href="/utsannisa/pendaftar/lihatdatapendaftar.php">Pendaftar</a></li>
  <li><a class='btn btn-info' href="/utsannsisa/kepsek/lihatdatakepsek.php">Kepala Sekolah</a></li>
  <li><a class='btn btn-info' href="/utsannisa/hasil/lihatdatahasil.php">Hasil</a></li>
  <ul class="nav navbar-nav navbar-right">
  <li><a href="/utsannisa/pengumuman.php">Pengumuman</a></li>
  </ul>
</ul>
</nav>
  </div>
<body>
<center>
<h1>Data Hasil</h1>
<table class="table table-bordered">
<tr>
<th style="background-color: lime">Nomor</th>
<th style="background-color: lime">Pendaftar</th>
<th style="background-color: lime">Jurusan</th>
<th style="background-color: lime">Nilai tpa</th>
<th style="background-color: lime">Nilai Wawancara</th>
<th style="background-color: lime">Nilai Uan</th>
<th style="background-color: lime">Nilai Minat</th>
<th style="background-color: lime">Nilai Rata</th>
<th style="background-color: lime">Penguji</th>
<th style="background-color: lime">Tahun Ajaran</th>
<th style="background-color: lime">Keterangan</th>
<th style="background-color: lime" colspan="3">Opsi</th>
</tr>
<?php
include('koneksi.php');
$ma = mysqli_query($koneksi,"SELECT hasil.id, hasil.nilai_tpa, hasil.nilai_wawancara, hasil.nilai_uan, hasil.nilai_minat, hasil.nilai_rata, hasil.tahun_ajaran, hasil.keterangan, pendaftar.nama as nama_pendaftar, jurusan.nama as nama_jurusan,  penguji.nama as nama_penguji FROM hasil JOIN pendaftar on pendaftar.id = hasil.pendaftar_id JOIN jurusan on jurusan.id = hasil.jurusan_id JOIN penguji on penguji.id = hasil.penguji_id");
$no = 1;
foreach ($ma as $data) {
  echo"<tr>
  <td>$no</td>
  <td>".$data['nama_pendaftar']."</td>
  <td>".$data['nama_jurusan']."</td>
  <td>".$data['nilai_tpa']."</td>
  <td>".$data['nilai_wawancara']."</td>
  <td>".$data['nilai_uan']."</td>
  <td>".$data['nilai_minat']."</td>
  <td>".$data['nilai_rata']."</td>
  <td>".$data['nama_penguji']."</td>
  <td>".$data['tahun_ajaran']."</td>
  <td>".$data['keterangan']."</td>
  <td><a class='btn btn-success' href='show.php?id=$data[id]'>Show</a></td>
  <td><a class='btn btn-warning' href='edit.php?id=$data[id]'>Edit</a></td>
  <td><a class='btn btn-danger' href='delete.php?id=$data[id]'>Delete</a></td>
  </tr>";
  $no++;
}
?>
</table>
</center>
<br>
<center><a class="btn btn-primary" href="tambah.php">+ Tambah Data Hasil</a>
</center>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>