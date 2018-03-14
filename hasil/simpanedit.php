<?php
include('koneksi.php');
$id = $_POST['id'];
$pendaftar = $_POST['namapendaftar'];
$jurusan = $_POST['namajurusan'];
$nilaitpa = $_POST['tpa'];
$nilaiwawancara = $_POST['ww'];
$nilaiuan= $_POST['uan'];
$nilaiminat = $_POST['minat'];
$lulus = $_POST['nilailulus'];
$rata =$nilaitpa+$nilaiwawancara+$nilaiuan+$nilaiminat;
$hasil = $rata/4;
if(($hasil >=0) && ($hasil<$lulus)){
	$index=" Maaf Tidak lulus";
}elseif(($hasil >=$lulus ) && ($hasil<=100)){
	$index=" Selamat Anda lulus";
}else{
	$index="Nilai Terlalu Jauh";
}
$penguji = $_POST['namapenguji'];
$tahunajaran= $_POST['ajaran'];

$simpan = "UPDATE  hasil SET pendaftar_id= '$pendaftar', jurusan_id='$jurusan', nilai_tpa='$nilaitpa', nilai_wawancara='$nilaiwawancara', nilai_uan='$nilaiuan', nilai_minat='$nilaiminat', nilai_rata='$hasil', penguji_id='$penguji', tahun_ajaran='$tahunajaran', keterangan='$index' Where id='$id'";
mysqli_query($koneksi,$simpan);
header("location:lihatdatahasil.php");
?>
$id=$_POST['id'];
$pendaftar= $_POST['nama_pendaftar'];
$jurusan = $_POST['nama_jurusan'];
$nilai_tpa = $_POST['tpa'];
$nilai_wawancara = $_POST['ww'];
$nilai_uan = $_POST ['uan'];
$nilai_minat = $_POST ['minat'];
$nilai_rata = $_POST['rata'];
$penguji = $_POST['nama_penguji'];
$tahun_ajaran = $_POST['ajaran'];
$edit5 ="UPDATE hasils SET pendaftar_id='$pendaftar', jurusan_id='$jurusan', nilai_tpa='$nilai_tpa', nilai_wawancara='$nilai_wawancara', nilai_uan='$nilai_uan', nilai_minat='$nilai_minat', nilai_rata='$nilai_rata', penguji_id='$penguji', tahun_ajaran='$tahun_ajaran' WHERE id='$id'"; 
mysqli_query($koneksi,$edit5);
header("location:lihatdata5.php");
?>