<?php
include "koneksi.php";
$kunci=$_GET['id'];
$query=mysql_query("delete from data where id=".$kunci);
echo "<script>
		alert('Data di Hapus');
		window.location.assign('hal_administrator.php');
	</script>";
?>