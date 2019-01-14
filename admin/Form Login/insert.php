<?php
// Connect to Database
mysql_connect("localhost", "root", "");
mysql_select_db("amdal");

 
$a = $_POST	['user_name'];
$b = $_POST	['user_pass'];

if (isset($_POST['simpan'])){
	$fileName = $_FILES['foto']['name'];


    // Simpan ke Database
	$sql = "insert into users values ( '$a','$b', '$fileName')";
	mysql_query($sql);
	// Simpan di Folder Gambar
	move_uploaded_file($_FILES['foto']['tmp_name'], "images/".$_FILES['foto']['name']);
	/*echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";*/
    
if($sql)
	{
	include("input.php"); 
	}

else
	{
	echo "Gagal Insert ... "; 
}     
    
}

?>

