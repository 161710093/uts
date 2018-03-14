<?php
include('koneksi.php');
$id=$_POST['id'];
$nama= $_POST ['nama'];
$tempatlahir= $_POST ['tempatlahir'];
$tanggallahir = $_POST ['tanggallahir'];
$jk = $_POST ['jeniskelamin'];
$agama = $_POST ['agama'];
$phone = $_POST ['phone'];
$edit= " UPDATE pendaftar set nama ='$nama', tempat_lahir = '$tempatlahir', tanggal_lahir ='$tanggallahir', jenis_kelamin ='$jk', agama ='$agama', phone ='$phone' WHERE id='$id'";
mysqli_query ($koneksi,$edit);
header("location:lihatdatapendaftar.php");
?>