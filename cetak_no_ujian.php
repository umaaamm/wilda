

<!DOCTYPE html>
<html>
<head>
	<title>SMKN 1 Terusan Nunyai | Kartu Ujian</title>
</head>
<body>
	<?php
include "phpqrcode/qrlib.php";
include "koneksi/koneksi.php";


$quer_id=$koneksi->query("select * from tbl_pendaftar where id_register = '".$_SESSION['id_register']."'");
$tampil_id = $quer_id->fetch_assoc(); 

// QRcode::png($tampil_id['id_pendaftar']);
?>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-0pky" align="center"><!-- <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?=$tampil_id['id_pendaftar']?>&choe=UTF-8" title="Link to Google.com" /> -->
    				<h3 align="center">Nomor Ujian Anda : </h3>
    			<h1 align="center" style="font-size: 50px;">00<?=$tampil_id['id_pendaftar']?></h1>
    <h5 align="center">Nama : <?=$tampil_id['nama']; ?><h5>
    	<h5 align="center">Jenis Kelamin : <?=$tampil_id['jenis_kelamin']; ?><h5></th>
  </tr>
</table>



</body>
<script type="text/javascript">window.print();</script>
</html>

