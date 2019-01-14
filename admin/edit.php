

<!DOCTYPE html>
<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
  
			
			
        <script type="text/javascript" src="libs/jquery.min.js"></script>
		<script type="text/javascript" src="libs/jquery.form.js"></script>
		<script type="text/javascript" src="libs/jquery.validate.min.js"></script>
		<link rel="stylesheet" type="text/css" href="libs/flexigrid/css/flexigrid.css">
        <link rel="stylesheet" type="text/css" href="libs/kalender/lib/css/default.css">
        <script type="text/javascript" src="libs/kalender/lib/zebra_datepicker.js"></script>
		<script type="text/javascript" src="libs/jquery.cookie.js"></script>
		<script type="text/javascript" src="libs/flexigrid/js/flexigrid.js"></script> 
        
     
        
   
        
		<script type="text/javascript">
		/*** 
Membuat Slideshow mudah dengan sedikit Bumbu JavaScript & CSS 
 By : Jon Raasch (jonraasch.com) &  Modified by : Kang Rian (blog.kangrian.com)
***/
 

		
		
		
		$(document).ready(function() {
		
		function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000 /* << Atur Kecepatan lebih menurun lebih cepat !*/, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 2000 );
});



		$('#tanggal').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });

		$('#tgl').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
		
		
		
			resetForm();
            //aktifkan ajax di form
            var options = {
				success	  : showResponse, 
				beforeSubmit:  function(){
					return $("#frm").valid();
				},
				resetForm : true,
				clearForm : true,
				dataType  : 'json'
			};
			$('#frm').ajaxForm(options); 
			
			//validasi form dgn jquery validate
			$('#frm').validate({
				 
			});
			
			//flexigrid handling
			$('#flex1').flexigrid
			(
				{
				url: 'index.php?action=getdata',
				dataType: 'json',  
				
				colModel : [ ],
				searchitems : [
					{display: 'NIM', name : 'nim'},
					{display: 'KELAS', name : 'kelas'},
					{display: 'SMT', name : 'smt'},
					{display: 'NAMA', name : 'nama', isdefault: true}
					],
					
				sortname: 'nama',
				sortorder: 'asc',
				usepager: true,
				 
				useRp: true,
				rp: 5,
				width: 1060,
				height: 150
				}
			);
			
        }); 
        function doaction( celDiv, id ) {
			$( celDiv ).click( function() {
				var nim = $(this).parent().parent().children('td').eq(0).text();
				$.getJSON ('index.php',{action:'get_mhs',nim:nim}, function (json) {
					 $('#tanggal').val(json.tanggal); 
					 $('#tgl').val(json.tgl); 
				});  
			});
		}
        function showResponse(responseText, statusText) {
			var data = responseText['data'];
			var pesan = responseText['pesan'];
			alert(pesan);
			resetForm();
			$('#flex1').flexReload();
		}
		function resetForm() {
			$('#input').removeAttr('disabled');
			$('#edit, #delete').attr('disabled','disabled');
			$('#nim').removeAttr('readonly');
		}
		
		//----------------------------------------gambar------------------------------------------------------
	  
		
		</script>  
		
		<script><!--

function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.angsuran_pokok.value;
two = document.autoSumForm.angsuran_bunga.value;
three = document.autoSumForm.diskon.value;
document.autoSumForm.jumlah.value = (one * 2000)// + (two * 1) - (three * 1);
}
function stopCalc(){
clearInterval(interval);}
</script>
		
		<style type="text/css">
		.bot{
		background-color:#FF0000;
		width:500px;
		height:50px;
		color:#FFFFFF;
		} 
		
		</style>
		   
  </head>
  
  <body  >
<?php
include "Form Login/dbconnect.php";
 $user_id = $_REQUEST['user_id']; 
{
$select = "select * from pesan where user_id = '$user_id'";
$select_query = mysql_query($select);

while($select_result = mysql_fetch_array($select_query))
	{

 
$a = $select_result['user_id'];
$jns = $select_result['jns'];
$c = $select_result['nama'];
$d = $select_result['telp'];
$e = $select_result['tgl1'];
$ee = $select_result['tgl2'];
$f = $select_result['alamat'];
$g = $select_result['rtrw'];
$h = $select_result['kel'];
$i = $select_result['kab'];
$j = $select_result['prov'];
$k = $select_result['jk'];
$l = $select_result['user_pass'];
$m = $select_result['kg']; 
 

?>

 
			   <form  action="proses.php" method="post">
<table>
<input type="text" name="user_id"  value="<?php echo $a; ?>" hidden="hidden">


<td>Password</td><td>:
<INPUT type="password" name="user_pass" value="<?php echo $l; ?>" disabled="disabled" SIZE="30"></td>
</tr>
<tr>
<td width="21%">Order</td>
<td width="79%" colspan="2">: 
<select name="jns">
				 <option value="" selected="selected"> - - - - - - - - - - - - - - - </option>
				  <option <?php if($jns=='Cuci Basah' ) {echo "selected";}?> value="Cuci Basah">Cuci Basah</option>
				  <option <?php if($jns=='Cuci Kering' ) {echo "selected";}?> value="Cuci Kering">Cuci Kering</option>
				  <option <?php if($jns=='Cuci Setrika' ) {echo "selected";}?> value="Cuci Setrika">Cuci Setrika</option> 
				</select> </td> 
</tr>
<tr>
<td>Nama lengkap</td><td>:
<INPUT TYPE="Text" name="nama" value="<?php echo $c; ?>" SIZE="30"></td>
</tr>
<tr>
<td>Nomor hp</td><td>:
<INPUT TYPE="Text" name="telp" value="<?php echo $d; ?>" SIZE="30"></td>
</tr>
<tr>
<td>Tanggal Pengambilan</td><td>:
<input type="text" name="tgl0" value="<?php echo $e; ?>" id="tanggal" size="20"></td> 
</tr>
<tr>
<td>Tanggal Antar</td><td>:
<input type="text" name="tgl2" value="<?php echo $ee; ?>" id="tgl" size="20"></td> 
</tr>
<tr>
<td>Alamat</td><td>:
<input type="text" Cols="30" Rows="5" value="<?php echo $f; ?>" name="alamat"></textarea></td>
<tr>
<td>RT / RW</td><td>:
<INPUT TYPE="Text" name="rtrw" SIZE="20" value="<?php echo $g; ?>" placeholder="RT / RW"></td>
</tr> 
<tr>
  <td>Jenis kelamin</td>
  <td>:
<input type="text" name="jk" value="<?php echo $k; ?>"></td>
</tr>
<tr>
<td>Kg</td>
<td>: <input type="text" name="kg" >
</tr> 
 
</tr>
</table>
<br>
<br>
<br> 
<input type="submit" class="bot" name="ok" value="Save" onClick="return confirm('Data anda akan kami simpan, anda yakin?')">
<br>
<input type="reset" class="bot" value="Cancel"> 
 
</form> 
 
  </body>
</html>
<?php
}
}
?>