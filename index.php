<?php
session_start();
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tienda Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda Online Productos Electronicos">

<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>

    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="assets/css/docs.css" rel="stylesheet"/>
      
     

    <link href="style.css" type="text/css" rel="stylesheet"/>
	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>

	
  </head>
<body>
  <!-- Navbar
    ================================================== -->
<div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
					<a id="logoM" href="index.php"></a>
                  <a data-target="#sidebar" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="nav-collapse">
                    <ul class="nav">
					  <li class=""><a href="index.php">Inicio	</a></li>
					  <li class=""><a href="?open=Barang-Produk">Productos</a></li>
					  <li class=""><a href="?open=About">Acerca</a></li>
					  <li class=""><a href="?open=Contact-Us">Contactos</a></li>
					</ul>
                     <form action="?open=BarangPencarian" method="POST" name="form1" class="navbar-search pull-left">
                     <input name="txtKeyword" id="srchFld" type="text" size="30" placeholder="Buscar......" class="search-query span5"/> <input type="submit" name="btnCari" value="Buscar">
                    </form>
                   					    
					<ul class="nav pull-right">
					<?php include_once "inc.login_status.php"; ?>
					
					</ul>
				
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
<!-- ======================================================================================================================== -->	
<div id="mainBody" class="container">
<header id="header">
<div class="row">

<div class="pull-right"> <br/>
<!--- ============ pojok kanan Atas
	<a href="product_summary.html"> <span class="btn btn-mini btn-warning"> <i class="icon-shopping-cart icon-white"></i> [ 3 ] </span> </a>
	<a href="product_summary.html"><span class="btn btn-mini active">$155.00</span></a> -->
<!-- ============== Hula-hula	
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>======== --> 
</div>

</div>
<div class="clr"></div>
</header>
<!-- ==================================================Header End====================================================================== -->
<!-- ============================ SLIDE KONTEN ============================ -->
	
	<!-- ISI KONTEN -- >
		  <!-- ============================ SLIDE KONTEN END ============================ -->

	<!-- Sidebar ================================================== -->
	<div class="row">
	<?php include "sidebar.php"; ?>
	<?php include_once "login.php"; ?>
	</div>
 
<!-- Sidebar end=============================================== -->

<!--     ISI KONTEN ===================== ----------->
	<?php require "buka_file.php"; ?><br><br><br>
	<!----------------- konten end ================================ --->
<!-- Footer ------------------------------------------------------ -->
		<?php require "footer.php"; ?>
<!--<script type="text/javascript" data-cfasync="false">(function () { var done = false;var script = document.createElement('script');script.async = true;script.type = 'text/javascript';script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';document.getElementsByTagName('HEAD').item(0).appendChild(script);script.onreadystatechange = script.onload = function (e) {if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {var w = new PCWidget({ c: 'd172da01-7f06-4297-b8c5-8b92bf4966c2', f: true });done = true;}};})();</script>-->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'a8c9e38f-a5f5-46d6-9a1a-7a003d4be81d', f: true }); done = true; } }; })();</script>
  </body>
</html>