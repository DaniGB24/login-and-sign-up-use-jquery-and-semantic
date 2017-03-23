<?php 
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql=mysql_query("select * from data where tb_username='$username' and tb_password='$password'");
$data=mysql_fetch_object($sql);
if ($data) { 
	# code...
	$_SESSION['username']=$username;
	if ($data->tb_hakakses=='pengunjung') {
		# code...
		echo "<script> 
			alert('Selamat anda berhasil login');
			window.location.assign('hal_pengunjung.php');
			</script>";
	}
	elseif ($data->tb_hakakses=='Administrator') {
		# code...
		echo "<script> 
			alert('Selamat anda berhasil login');
			window.location.assign('hal_administrator.php');
			</script>";
	}			
	?> 
	<?php
}
else{
	?>
	<?php
	echo "<script>
		alert('Anda Belum Terdaftar silahkan Mendaftar');
		window.location.assign('index.html');
	</script>";
}?>