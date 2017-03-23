<?php
include "koneksi2.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from datasekolah where npsn=".$kunci);
echo "<script>
		alert('Data di Hapus');
		window.location.assign('datasekolah.php');
	</script>";
?>