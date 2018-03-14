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
<center>
<h1>Tambah Data Hasil</h1>
</center>
<fieldset style="width: 50%; margin: auto;">
<legend>Tambah Data Hasil</legend>
<form action="simpan.php" method="post">
<p>
Pendaftar:
  <?php
        include('koneksi.php');
        $ma = mysqli_query($koneksi, "SELECT * FROM pendaftar");
        ?>
        <select name="namapendaftar">
        <option>-</option>
          <?php
            foreach ($ma as $data) {
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
          <?php
            }
          ?>
        </select>
</p>
<p>
Jurusan:
 <?php
        include('koneksi.php');
        $ma = mysqli_query($koneksi, "SELECT * FROM jurusan");
        ?>
        <select name="namajurusan">
        <option>-</option>
          <?php
            foreach ($ma as $data) {
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
          <?php
            }
          ?>
        </select>
        </p>
<p>
	Nilai Tpa:
	<input type="text" name="tpa" required/>
</p>
<p>
	Nilai Wawancara:
	<input type="text" name="ww" required/>
</p>
<p>
	Nilai Uan:
	<input type="text" name="uan" required/>
</p>
<p>
	Nilai Minat:
	<input type="text" name="minat" required/>
</p>
<p>
Penguji:
  <?php
        include('koneksi.php');
        $ma = mysqli_query($koneksi, "SELECT * FROM penguji");
        ?>
        <select name="namapenguji">
        <option>-</option>
          <?php
            foreach ($ma as $data) {
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
          <?php
            }
          ?>
        </select>
</p>
<p>
	Tahun Ajaran:
	<input type="text" name="ajaran" required/>
</p>

<p>
<?php
include ('koneksi.php');
$jurusan = mysqli_query($koneksi,"SELECT * FROM jurusan");
?>
<?php
foreach ($jurusan as $b) {
?>
<input type="hidden" name="nilailulus" value="<?php echo $b['nilai_lulus'];?>" required/>
<?php
}
?>
</p>
<p>
<button type="submit" class="btn btn-success"  value="Simpan">Simpan</button> II
  <button type="reset" class="btn btn-danger" value="Hapus" onclick="return confirm ('Hapus Data Yang Telah Di Input?')">Hapus</button>
</p>
<br>
</form>
</fieldset>
<br>
<center>
<a class="btn btn-primary" href="lihatdatahasil.php"> << Tabel Hasil</a>
</center>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>