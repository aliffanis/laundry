<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" lang="id"><head>


	<title>Redirect Page</title>
	<META HTTP-EQUIV=Refresh CONTENT='2; URL=data.php'>
    <style type="text/css">
<!--
.style4 {font-size: 10px}
-->
* { margin: 0; padding: 0; }

body {
	border-top-width: 30px;
	border-top-style: solid;
	font: 11px "Lucida Grande", Verdana, Arial, "Bitstream Vera Sans", sans-serif;
}

form {
	margin-left: 8px;
	padding: 16px 16px 40px 16px;
	font-weight: normal;
	-moz-border-radius: 11px;
	-khtml-border-radius: 11px;
	-webkit-border-radius: 11px;
	border-radius: 5px;
	background: #fff;
	border: 1px solid #e5e5e5;
	-moz-box-shadow: rgba(200,200,200,1) 0 4px 18px;
	-webkit-box-shadow: rgba(200,200,200,1) 0 4px 18px;
	-khtml-box-shadow: rgba(200,200,200,1) 0 4px 18px;
	box-shadow: rgba(200,200,200,1) 0 4px 18px;
}

form .forgetmenot { font-weight: normal; float: left; margin-bottom: 0; }

#redirect form p {
	margin-bottom: 0;
}

label {
	color: #777;
	font-size: 13px;
}

form .forgetmenot label {
	font-size: 11px;
	line-height: 19px;
}
form p { margin-bottom: 24px; }

#nav {
	text-shadow: rgba(255,255,255,1) 0 1px 0;
}
#redirect { width: 320px; margin: 7em auto; }
#nav { margin: 0 0 0 8px; padding: 16px; }

.a{
background-color:#FF0000;
color:#FFFFFF;
font-weight:100px;

}
    </style>
    
    
    </head>
<body class="login">

<?php 
include "Form Login/dbconnect.php";
$id = $_GET['user_id'];
$query = mysql_query("delete from pesan where user_id='$id'") or die(mysql_error());


?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="redirect" align="center">
<p class="message">
<h2>PROSES MENGHAPUS DATA !</h2></p>

<form name="loading" id="loading">
	<p> 
	<p><img src="images/loading.gif" alt="Loading" width="150" height="13" /></p>
	<p>&nbsp;</p>
	<p> <span class="style4">KELAMAAN ? Skip Aja Bro</span></p>
	<br />
	<p><span class="style4"><a href="data.php"><input type="button" value="SKIP" class="a"></a></span></p> 
	<p>
      <label></label>
  </form>

</div>

</body></html>