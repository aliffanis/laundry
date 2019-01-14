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
  <span class="style1">DAFTAR AKUN ADMIN</span>
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
include_once 'dbconnect.php';

//proses
    if(isset($_POST['btn-signup'])) {
    $nama=$_POST['uname']; 
    $password=$_POST['pass'];
   
//script validasi data
 
    $cek = mysql_num_rows(mysql_query("SELECT * FROM admin WHERE username='$nama'"));
    if ($cek > 0){
    echo "<script>window.alert('Username sudah ada, silahkan gunakan Username lain')
    window.location=''</script>";
    }else {
    mysql_query("INSERT INTO admin(username,password) VALUES ('$_POST[uname]', '$_POST[pass]')");
 
    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='../../index.php'</script>";
    }
    }
    ?>