<?php 
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='data_admin_user';
	
	$koneksi=mysql_connect($dbhost,$dbuser,$dbpass);
	
	mysql_select_db($dbname,$koneksi);
	
	if (!$koneksi){
		echo "koneksi gagal <br> ", mysql_error ($koneksi);
	} else{
		mysql_select_db($dbname);
	}
?>