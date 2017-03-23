<?php
include "koneksi2.php";

$namasekolah=$_POST['nama_sekolah'];
$npsn=$_POST['npsn'];
$jenjang=$_POST['jenjang'];
$statussekolah=$_POST['status'];
$query=mysql_query("insert into datasekolah (nama_sekolah,npsn,jenjang,status_sekolah) 
	values('$namasekolah','$npsn','$jenjang','$statussekolah')");
echo "<script>
		alert('Tambah data berhasil');
		window.location.assign('datasekolah.php');
	</script>";
?>