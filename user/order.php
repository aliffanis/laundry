

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
		
		.tab_container{width:100%;margin:0 auto;padding-top:10px;position:relative; color:#990000;}

input,section{clear:both;padding-top:10px;color:#00CC00;display:none}
label{
width:auto;
height:30px;
margin-top:20px;
color:#990033; 
 
	  

 display:block;float:left;width:auto; height:30px; color:#000000;cursor:pointer;text-decoration:none;text-align:center; 
	background: -moz-linear-gradient(top, #990033);}
#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5,
#tab6:checked ~ #content6,
#tab7:checked ~ #content7
{display:block;padding:20px;background:#fff;color:#990033;border-bottom:2px solid #f0f0f0}
.tab_container .tab-content p,.tab_container .tab-content h3{ margin-top:-80px;-webkit-animation:fadeInScale 0.7s ease-in-out;-moz-animation:fadeInScale 0.7s ease-in-out;animation:fadeInScale 0.7s ease-in-out}
.tab_container .tab-content h3{text-align:center}
.tab_container [id^="tab"]:checked + label{background:#fff; color:#990033;box-shadow:inset 0 3px #990033}
.tab_container [id^="tab"]:checked + label .fa{color:#000000;}
label .fa{font-size:1.3em;margin:0 0.4em 0 0;display:inline-block;width:1.28571429em;height:auto;float:none;margin-left:-15px}
}
/*Media query*/
@media only screen and (max-width:900px){
  label span{display:none}
  .tab_container{width:98%}
}
/*Content Animation*/
@keyframes fadeInScale{
  0%{transform:scale(0.9);opacity:0}
  100%{transform:scale(1);opacity:1}
}
.clearfix:before,.clearfix:after{content:" ";display:table}
		</style>
		   
  </head>
  
  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="../index.php" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="../img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="../img/logo-dark.png" alt="">          </a>        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="indexuser.html">Home</a></li>
            <li><a href="#">Order</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="Form Login/logout.php"  onClick="return confirm('Anda yakin mau keluar akun ?')">Log Out</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1"><center>FORMAT ORDER <br> GO LAUNDRY</h1>
            <p class="margin-bottom-0 text-size-16"></div>  
        </header>



<div class="tab_container"> 
<input checked="" id="tab1" name="tabs" type="radio" />
<label for="tab1">
<i class="fa fa-code"></i><span class="style3"><strong>Order di sini</strong></span> &nbsp;&nbsp;&nbsp;&nbsp;</label>

<input id="tab2" name="tabs" type="radio" />
<label for="tab2">
<i class="fa fa-pencil-square-o"></i><span class="style3"><strong>Data anda</strong></span> &nbsp;&nbsp;&nbsp;&nbsp;</label> 



<!----------------------------------------------------  ------------------------------------------------------->

<section class="tab-content" id="content1"> 
<div>
<iframe src="isi.php" width="100%" height="1900" scrolling="no" frameborder="0" name="isi"></iframe>
</div></section>


<!-----------------------------------------------------------------------data -------------------------------------->


<section class="tab-content" id="content2">
 
<div id="">		 	
   <iframe src="data.php" width="100%" height="500" scrolling="no" frameborder="0" name="isi"></iframe>
</div></section>

      
      <!-- Bottom Footer -->
    </footer>
    <script type="text/javascript" src="../js/responsee.js"></script>
    <script type="text/javascript" src="../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/template-scripts.js"></script>
  </body>
</html>