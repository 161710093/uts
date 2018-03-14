<?php
include ('koneksi.php');
$nama= $_POST ['nama'];
$nilailulus = $_POST ['nilailulus'];
$tambah = "INSERT into jurusan set nama ='$nama', nilai_lulus = '$nilailulus'";
mysqli_query ($koneksi,$tambah);
header("location:lihatdatajurusan.php");
?>