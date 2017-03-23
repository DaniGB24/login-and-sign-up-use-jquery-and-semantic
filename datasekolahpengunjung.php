
<?php
session_start();
if (isset($_SESSION['username'])) 
	{
		include "koneksi.php";
    include "koneksi2.php";
		$query = "SELECT * FROM data";
      $query = "SELECT * FROM datasekolah";
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
  crossorigin="anonymous">

  </script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Data Sekolah Cat Community</title>

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
         <img src="images/cat.png" style="margin-right: 5px; height: 50; width: 35" class="image">
          <?php echo "Data ".$_SESSION['username'];?><br>
          (Pengunjung)
      </a>

            
      <div class="ui right header" style="color: white;margin-top: 18px;"><h4><?php echo "Jumlah Data : ".$jumlah_baris;?></h4></div>
    </div>
    <a href="logout.php" class="ui right header item">LOGOUT</a>
  </div>

<!-- Tabel Data -->
<br><br>
<table class="ui selectable celled table">
  <thead>
    <tr>
    <td>nama</td>
    <td>npsn</td>
    <td>jenjang</td>
    <td>status</td>
    </tr>
  </thead>
  <tbody>

  <?php if($jumlah_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
  <?php while($data = mysql_fetch_object($sql)): ?>
	<tr>	
		
    <td><?php echo $data->nama_sekolah;?></td>
    <td><?php echo $data->npsn;?></td>
    <td><?php echo $data->jenjang;?></td>
    <td><?php echo $data->status_sekolah;?></td>
		
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
			?>Anda tidak boleh mengakses halaman ini!<a href="index.html">Login Dulu Gan</a><?php
		}
?>