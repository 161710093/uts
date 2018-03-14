<?php
include ('koneksi.php');
$nama= $_POST ['nama'];
$jabatan = $_POST ['jabatan'];
$tambah = "INSERT into penguji set nama ='$nama', jabatan = '$jabatan'";
mysqli_query ($koneksi,$tambah);
header("location:lihatdatapenguji.php");
?>