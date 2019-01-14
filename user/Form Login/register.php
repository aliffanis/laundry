<?php
 
include "../../admin/Form Login/dbconnect.php";
/*
if(isset($_POST['btn-signup']))
{ 
	$uname = mysql_real_escape_string($_POST['uname']); 
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$uname = trim($uname); 
	$upass = trim($upass);  
	 
	$sql = "INSERT INTO users (username,password) VALUES('$uname','$upass')";
	mysql_query($sql);
	
	// Cek username di database
$cek_username=mysql_num_rows(mysql_query
             ("SELECT username FROM users 
               WHERE username='$_POST[uname]'"));
// Kalau username sudah ada yang pakai
if ($cek_username > 0){
  echo "Username sudah ada yang pakai. Ulangi lagi";
}
// Kalau username valid, inputkan data ke tabel users
else{
  mysql_query("INSERT INTO users(username,password) VALUES ('$_POST[uname]', '$_POST[pass]')");
	}
   // header('location:loadin2.php'); 
	
	
}
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
 <link rel="stylesheet" href="css/style.css">
 
<style type="text/css">
<!--
.style1 {
color:#999999;
	font-weight: bold;
	font-size: 20px;
}
-->
</style>
</head>
<body>
<br /><br /><br /><br /><br /><br /><br />
<center>
<div class="login">
<form method="post" enctype="multipart/form-data">
  <span class="style1">DAFTAR AKUN MEMBER</span>
  <br />
  <hr />
<br />
 <input type="text" name="uname" placeholder="User Name" required /> 
  
<input type="password" name="pass" placeholder="Your Password" required /> 
<br />
 <button type="submit" name="btn-signup">Daftar</button> 

</form>
</div>
</center>
</body>
</html>
<?php
//proses
    if(isset($_POST['btn-signup'])) {
    $nama=$_POST['uname']; 
    $password=$_POST['pass'];
   
//script validasi data
 
    $cek = mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$nama'"));
    if ($cek > 0){
    echo "<script>window.alert('Username sudah ada, silahkan gunakan Username lain')
    window.location=''</script>";
    }else {
    mysql_query("INSERT INTO users(username,password) VALUES ('$_POST[uname]', '$_POST[pass]')");
 
    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='../../index.php'</script>";
    }
    }
    ?>