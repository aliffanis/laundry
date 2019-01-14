<?php 
include "koneksi.php";
  
$jns = $_POST	['jns'];
$nama = $_POST	['nama'];
$telp = $_POST	['telp'];
$tgl0 = $_POST	['tgl0'];
//$tgl2 = $_POST	['tgl2'];
$alamat = $_POST['alamat'];
$rtrw = $_POST	['rtrw'];
//$kel = $_POST	['kel'];
//$kab = $_POST	['kab'];
//$prov = $_POST	['prov'];
$jk = $_POST	['jk'];  
$pass = $_POST	['user_pass'];  


$query_insert = "insert into pesan
(jns,nama,telp,tgl1, alamat,rtrw,jk,user_pass)
values
('$jns','$nama', '$telp', '$tgl0', '$alamat', '$rtrw',  '$jk', '$pass');";
 $insert = mysql_query($query_insert);

if($insert)
	{
	include("isi.php");
	}

else
	{
	echo "Gagal Insert ... ";
	echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=isi.php'>";
	}
	 
?>