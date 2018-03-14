<?php
include ('koneksi.php');
$nama= $_POST ['nama'];
$tempatlahir= $_POST ['tempatlahir'];
$tanggallahir = $_POST ['tanggallahir'];
$jk = $_POST ['jeniskelamin'];
$agama = $_POST ['agama'];
$phone = $_POST ['phone'];
$tambah = "INSERT into pendaftar set nama ='$nama', tempat_lahir = '$tempatlahir', tanggal_lahir ='$tanggallahir', jenis_kelamin ='$jk', agama ='$agama', phone ='$phone'";
mysqli_query ($koneksi,$tambah);
header("location:lihatdatapendaftar.php");
?>