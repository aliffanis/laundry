<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	 //header("Location: ../indexadmin.php");
} 

if(isset($_POST['btn-login']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$upass = mysql_real_escape_string($_POST['upass']);
	
	$uname = trim($uname);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_name,user_pass FROM user WHERE user_name='$uname'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: loadin.php");
	}
	else
	{
		?>
        <script>alert('register salah !');</script>
        <?php
	}
	
}
?>