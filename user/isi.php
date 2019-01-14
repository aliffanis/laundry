

<!DOCTYPE html>
<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/responsee.css">
    <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="../css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>  
			
			
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
		
		
		
		<style type="text/css">
		.bot{
		background-color:#FF0000;
		width:500px;
		height:50px;
		color:#FFFFFF;
		} 
		
		</style>
		   
  </head>
  
  <body class="size-1140">
    <!-- HEADER -->
     
    
    <!-- MAIN -->
 
             
            <p class="margin-bottom-40">
			<div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
			   <form method="post" action="input.php">
<table>

<td>Password</td><td>:
<INPUT type="password" name="user_pass" SIZE="30" requered="requered"></td>
</tr>
<tr>
<td width="21%">Order</td>
<td width="79%" colspan="2">: 
  <SELECT name="jns" requered="requered">
<option value="Cuci Basah">Cuci Basah</option>
<option value="Cuci Kering">Cuci Kering</option>
<option value="Cuci Setrika">Cuci Setrika</option>
</SELECT> </td> 
</tr>
<tr>
<td>Nama lengkap</td><td>:
<INPUT TYPE="Text" name="nama" SIZE="30" requered="requered"></td>
</tr>
<tr>
<td>Nomor hp</td><td>:
<INPUT TYPE="Text" name="telp" SIZE="30" requered="requered"></td>
</tr>
<tr>
<td>Tanggal Antar Pakaian</td><td>:
<input type="text" name="tgl0" id="tanggal" size="20" requered="requered"></td> 
</tr> 
<tr>
<td>Alamat</td><td>:
<input type="text" Cols="30" Rows="5" name="alamat" requered="requered"></td>
<tr>
<td>RT / RW</td><td>:
<INPUT TYPE="Text" name="rtrw" SIZE="20" placeholder="RT / RW" requered="requered"></td>
</tr> 
<tr>
<td>Jenis kelamin</td><td>:
<select name="jk" requered="requered">
<option value="Pria">Pria</option>
<option value="Wanita">Wanita</option>
</select>
</tr>
</table>
<br>
<br>
<br> 
<input type="submit" class="bot" name="ok" value="Save" onClick="return confirm('Data anda akan kami simpan, anda yakin?')">
<br>
<input type="reset" class="bot" value="Cancel"> 
</form>
 
                  
      </div>
            </div>
         </div>
         
            </p>
          </div>   
        </section>
		
		
		
		
      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
            <div class="margin">
          <div class="s-12 m-6 l-4">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Discount 50 % untuk tiap kali pencucian lebih dari 5x dan tiap pencuciannya lebih dari 2kg. kumpulkan POIN nya dan dapatkan cuci GRATIS jika anda memiliki 100POINT.</p>  
                    </div> 
                  </div> 
                <img src="../img/disc.png" alt="" title="Portfolio Image 1" />                </div>				
              </div>
			  <div class="s-12 m-5 l-4">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Daftar harga pencucian dan Ongkos kirim dan ambil.</p>  
                    </div> 
                  </div> 
                <img src="../img/order.png" alt="" title="Portfolio Image 1" />                </div>	
              </div>
			  <div class="s-12 m-5 l-4">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p>Layanan Pencucian yang kami berikan.</p>  
                    </div> 
                  </div> 
                <img src="../img/get.png" alt="" title="Portfolio Image 1" />                </div>	
              </div>
          </div>
        </div>
      </section>
      <!-- Section 1 -->		
      </article>
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Contact Us: 082 247 728 493</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
            <iframe src="img/map.png" width="100%" height="350" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
              </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Company Address</h3>
                  <p>Jl. Raya Candi No. 107<br>
                     Kabupaten Sidoarjo
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">MEDSOS</h3>
                  <p>E-Mail 	: golaundry.com<br>
					Instagram 	 : go_laundry<br>
					Facebook 	 : go laundry<br>
					Whatsapp 	 : 082 - 247 - 728 - 493
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone Numbers</h3>
                  <p>0800 4521 800 50<br>
                     0450 5896 625 16<br>
                     0798 6546 465 15
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
    </footer>
    <script type="text/javascript" src="../js/responsee.js"></script>
    <script type="text/javascript" src="../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/template-scripts.js"></script>
  </body>
</html>