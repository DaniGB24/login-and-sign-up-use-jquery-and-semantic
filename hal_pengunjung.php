<?php
session_start();
if (isset($_SESSION['username'])) 
	{
		include "koneksi.php";
		$query = "SELECT * FROM data";
		$sql = mysql_query($query, $koneksi);
		$jumlah_baris = mysql_num_rows($sql);
?>
<!DOCTYPE html>
<html>
<head>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Pengunjung</title>

  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class="ui fixed inverted menu" style="background-color:#007CFF">
    <div class="ui container">
      <a href="hal_pengunjung.php" class="header item">
         <img src="images/cat.png" style="margin-right: 5px" class="image">
          <?php echo "Data ".$_SESSION['username'];?><br>
          (pengunjung)
      </a>

      <div class="ui secondary  menu">
            <a class="item" href="datasekolahpengunjung.php">
              Data Sekolah
            </a>
      </div>
    </div>
    <div class="ui container" style="color: white;margin-top: 13px:grid"><h3><?php echo "Jumlah Data : ".$jumlah_baris;?></h3></div>
    <a href="logout.php" class="ui right header item">LOGOUT</a>
  </div>

<!-- Tabel Data -->
<br><br>
<table class="ui selectable celled table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama depan</th>
      <th>nama belakang</th>
      <th>Alamat</th>
      <th>Agama</th>
      <th>Umur</th>
      <th>Status</th>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
      <th>Hak Akses</th>
    </tr>
  </thead>
  <tbody>

  <?php if($jumlah_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
  <?php while($data = mysql_fetch_object($sql)): ?>
	<tr>	
		<td><?php echo $data->id;?></td>
    <td><?php echo $data->tb_namadepan;?></td>
    <td><?php echo $data->tb_namabelakang;?></td>
    <td><?php echo $data->tb_alamat;?></td>
    <td><?php echo $data->tb_agama;?></td>
    <td><?php echo $data->tb_umur;?></td>
    <td><?php echo $data->tb_status;?></td>
    <td><?php echo $data->tb_username;?></td>
    <td><?php echo $data->tb_password;?></td>
    <td><?php echo $data->tb_email;?></td>
    <td><?php echo $data->tb_hakakses;?></td>
	</tr>
		<?php endwhile;?>
		<?php endif; ?>
  </tbody>
</table>
</body>
</html>
<?php
	}else
		{
			?>Anda tidak boleh mengakses halaman ini!<a href="index.html">Silahkan Login Terlebih dahulu</a><?php
		}
?>