<?php
include "koneksi.php";
$namadepan=$_POST['namadepan'];
$namabelakang=$_POST['namabelakang'];
$alamat=$_POST['alamat'];
$hobby=$_POST['hobby'];
$agama=$_POST['agama'];
$umur=$_POST['umur'];
$status=$_POST['status'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$hakakses=$_POST['hakakses'];
$query=mysql_query("insert into data (tb_email,tb_username,tb_password,tb_namadepan,tb_namabelakang,tb_alamat,tb_umur,tb_hobby,tb_agama,tb_status,tb_hakakses) 
	values('$email','$username',md5('$password'),'$namadepan','$namabelakang','$alamat','$umur','$hobby','$agama','$status','$hakakses')");
echo "<script>
		alert('Silahkan Login Akun anda');
		window.location.assign('index.html');
	</script>";
?>