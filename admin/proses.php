
<?php
include "Form Login/dbconnect.php"; 


$a =$_POST['user_id'];
$b = $_POST['jns'];
$c = $_POST['nama'];
$d = $_POST['telp'];
$e = $_POST['tgl0'];
$ee = $_POST['tgl2'];
$f = $_POST['alamat'];
$g = $_POST['rtrw'];
//$h = $_POST['kel'];
//$i = $_POST['kab'];
//$j = $_POST['prov'];
$k = $_POST['jk'];
//$l = $_POST['user_pass'];
$m = $_POST['kg']; 
//$n = $_POST['total']; 
 

$query = mysql_query("update pesan set

jns='$b',
nama='$c',
telp='$d',
tgl1='$e',
tgl2='$ee',
alamat='$f',
rtrw='$g', 
jk='$k',
kg='$m'
where user_id='$a'");
 

if($query)
	{
	//echo "berhasil update... ";
	echo "<META http-equiv='refresh' content='0;URL=data.php'>";
	}

else
	{
	echo "Gagal update ... ";
	
	}

?>

