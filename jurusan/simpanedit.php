<?php
include('koneksi.php');
$id=$_POST['id'];
$nama=$_POST['nama'];
$nilailulus = $_POST['nilailulus'];
$edit = "UPDATE jurusan SET nama='$nama', nilai_lulus='$nilailulus' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdatajurusan.php");
?>
