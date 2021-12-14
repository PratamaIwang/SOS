<!DOCTYPE html>
<!--
	Cosmix by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Self Order Software</title>
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<!--Responsive-->
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
<!--Animation-->
<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
<!--Prettyphoto-->
<link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">
<!--Font-Awesome-->
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
<!--Owl-Slider-->
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.transitions.css')}}">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  [endif]-->
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>
<!--Navigation-->
<header id="menu">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a class="scroll" href="/">Home</a></li>
            <li><a class="scroll" href="menu">Menu</a></li>
            <li><a class="scroll" href="keranjang">Keranjang</a></li>
            <li><a class="scroll" href="addMenu">Tambah Menu</a></li>
            <li><a class="scroll" href="login">Log In</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
</header>
<!--Slider-Start-->
<section id="slider">
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active" style="background-image:url(img/carousel/food-1.jpg)">
          <div class="carousel-caption container">
            <div class="row">
              <div class="col-md-7 col-sm-12 col-xs-12">
                <h1>Es Degan Spesial + Bala Bala</h1>
                <h2>Cinta pertama yang dirindukan</h2>
                <p>Es Degan yang akan mencerahkan hari ditemani dengan bala bala yang menghangatkan jiwa</p>
              </div>
            </div>
          </div>
        </div>
      <div class="item" style="background-image:url(img/carousel/food-2.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>Salad Risol</h1>
              <h2>Teman diet untuk kamu yang spesial</h2>
              <p>Membantu kamu sehat dengan nutrisi yang bisa membuatmu merasakan kebahagiaan</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="item" style="background-image:url(img/carousel/food-3.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>La Pasta De Papel</h1>
              <h2>Pasta de Linguini de Ratatouille</h2>
              <p>De Pasta de jorginho de Lukaku un Tony Sucipto</p>
            </div>
          </div>
        </div>
      </div>
      <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> 
    </div>
  </div>
  <!--/#home-carousel-->
</section>

<section id="about">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>ABOUT <span>US</span></h2>
        <div class="line"></div>
        <p><span><strong>R</strong></span>estoran indonesia yang dibalut dengan rasa masakan Perancis yang membuat kamu berbunga dan penuh dengan Cinta</p>
      </div>
    </div>
  </div>
</section>
<section id="btn_order" class="text-center mb-3">
  <button type="button" class="btn btn-danger btn-order btn-lg" onclick="goMenu()">PESAN SEKARANG !!!</button>
</section>


<footer id="footer">
  <div class="bg-sec">
    <div class="container">
      <h2>Jangan Sampai <strong>KEHABISANN </strong>yaaa</h2>
    </div>
  </div>
</footer>
<script>
    function goMenu(){
      
      window.location.href = "menu";
    }
</script>
<!--Jquery-->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<!--Boostrap-Jquery-->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!--Preetyphoto-Jquery-->
<script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<!--NiceScroll-Jquery-->
<script type="text/javascript" src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<!--Isotopes-->
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
<!--Wow-Jquery-->
<script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
<!--Count-Jquey-->
<script type="text/javascript" src="{{asset('js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.inview.min.js')}}"></script>
<!--Owl-Crousels-Jqury-->
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
<!--Main-Scripts-->
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
