<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
/*Fun begins*/
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
  
</head>

<body>
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
<i class="fa fa-code"></i><span class="style3">Order di sini</span> &nbsp;&nbsp;&nbsp;&nbsp;</label>

<input id="tab2" name="tabs" type="radio" />
<label for="tab2">
<i class="fa fa-pencil-square-o"></i><span class="style3">Data anda</span> &nbsp;&nbsp;&nbsp;&nbsp;</label> 



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

</div>
</body>
</html>
