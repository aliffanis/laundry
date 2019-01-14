<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
}
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
		
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

#a{
box-shadow: 0px 0px 15px 15px lightgray;

width:1120px;
margin:10px auto;
height: 0px auto;
margin-bottom:10px;
}
.style3 {
width:1110px;
	font-size: 40px;
	color: #FFFFFF;
	background-color:#0000FF;
		
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}
-->
</style>
</head>

<body> 

  

 
<div align="center"> 
 </div><br /> 
 
 
  
<table width="100%" align="center">

        <tr>
        <td colspan=13 bgcolor=#00FFFF><div align=center class=style2>DATA</strong></div></td>
      </tr>

      <tr>
	  
        <td>No.</td> 
        <td>CS KE</td> 
        <td>NAMA</td>
        <td>ALAMAT</td>
        <td>RT/RW</td>
        <td>TGL ANTAR</td>
        <td>TGL AMBIL</td> 
        <td>NO. TELP</td>
        <td>JENIS CUCI</td>
        <td>BERAT/KG</td>
        <td>TOTAL</td> 
        <td>OPSI</td> 
      </tr>
	  
	  
	  <?php  
include "Form Login/dbconnect.php"; 
$select = "select * from pesan";
$select_query = mysql_query($select);
$n=1;
while($smp = mysql_fetch_array($select_query))
{
$id     = $smp	['user_id'];
$jns    = $smp	['jns'];
$nama   = $smp	['nama'];
$telp   = $smp	['telp'];
$tgl1   = $smp	['tgl1'];
$tgl2   = $smp	['tgl2'];
$alamat = $smp	['alamat'];
$rtrw   = $smp	['rtrw'];
$kel    = $smp	['kel'];
$kab    = $smp	['kab'];
$prov   = $smp	['prov'];
$jk     = $smp	['jk'];  
$pass   = $smp	['user_pass']; 
$kg     = $smp	['kg'];  
$x1=3000; 
$x2=4000; 
$x3=5000;
$z1=$kg*$x1;
$z2=$kg*$x2;
$z3=$kg*$x3;	 
	 echo "
	 <tr>
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$n</td>
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$id</td> 
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$nama</td>
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$alamat</td>
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$rtrw</td>
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$tgl1</td> 
  
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$tgl2</td> 
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$telp</td>
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$jns</td> 
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >$kg</td>
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >
";

if ($jns=="Cuci Basah")
        {
            echo "$z1";
        } 
        elseif ($jns=="Cuci Kering")
        {
            echo "$z2";
        }       
        elseif ($jns=="Cuci Setrika")
        {
            echo "$z3";
         }


echo "</td> 
 
<td bordercolor=#0000FF bgcolor=#CCCCCC align=center width=50 >
<a href='edit.php?user_id=$id'><img src='Form Login/images/edit.png'></img></a>
<a href='hapus.php?user_id=$id' onClick='return confirm(Anda yakin mau menghapus ?)'><img src='Form Login/images/delete.png'></img></a>
</td> 
    </tr>";
	
	$n++;
	   
     
 
  } 
  ?>
  </form>

</table>  
</body>
</html>
