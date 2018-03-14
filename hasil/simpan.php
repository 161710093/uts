<?php
include('koneksi.php');
$pendaftar= $_POST['namapendaftar'];
$jurusan = $_POST['namajurusan'];
$nilaitpa = $_POST['tpa'];
$nilaiwawancara = $_POST['ww'];
$nilaiuan = $_POST ['uan'];
$nilaiminat = $_POST ['minat'];
$lulus = $_POST['nilailulus'];
$nilairata = $nilaitpa+$nilaiwawancara+$nilaiuan+$nilaiminat;
$hasil = $nilairata/4;
if (($hasil>=0)&&($hasil<$lulus)){
	$index = " Maaf Anda Tidak Lulus";
}elseif (($hasil>=$lulus)&&($hasil<=100)){
	$index=" Selamat Anda Lulus";
}else {
	$index="Nilai Terlalu Tinggi";
}
$penguji = $_POST['namapenguji'];
$tahunajaran = $_POST['ajaran'];

$tambah ="INSERT INTO hasil SET pendaftar_id='$pendaftar', jurusan_id='$jurusan', nilai_tpa='$nilaitpa', nilai_wawancara='$nilaiwawancara', nilai_uan='$nilaiuan', nilai_minat='$nilaiminat', nilai_rata='$hasil', penguji_id='$penguji', tahun_ajaran='$tahunajaran', keterangan ='$index'"; 
mysqli_query($koneksi,$tambah);
header("location:lihatdatahasil.php");
?>