<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventre</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="https://www.localhost/acme/themes/web/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://www.localhost/acme/themes/web/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="https://www.localhost/acme/themes/web/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="https://www.localhost/acme/themes/web/plugins/slick/slick.css" rel="stylesheet">
  <link href="https://www.localhost/acme/themes/web/plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="https://www.localhost/acme/themes/web/css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="https://www.localhost/acme/themes/web/images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="index.html">
        <img src="themes/web/images/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown active dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">Home
            <span>/</span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.html">Homepage</a>
            <a class="dropdown-item" href="homepage-two.html">Homepage 2</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="speakers.html">Speakers
            <span>/</span>
          </a>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#" data-toggle="dropdown">Pages<span>/</span></a>
            <!-- Dropdown list -->
            <div class="dropdown-menu">
              <a class="dropdown-item" href="about-us.html">About Us</a>
              <a class="dropdown-item" href="single-speaker.html">Single Speaker</a>
              <a class="dropdown-item" href="gallery.html">Gallery</a>
              <a class="dropdown-item" href="gallery-two.html">Gallery-02</a>
              <a class="dropdown-item" href="testimonial.html">Testimonial</a>
              <a class="dropdown-item" href="pricing.html">Pricing</a>
              <a class="dropdown-item" href="FAQ.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule.html">Schedule<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sponsors.html">Sponsors<span>/</span></a>
        </li>
        <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="#"  data-toggle="dropdown">News
            <span>/</span>
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="news.html">News without sidebar</a>
            <a class="dropdown-item" href="news-right-sidebar.html">News with right sidebar</a>
            <a class="dropdown-item" href="news-left-sidebar.html">News with left sidebar</a>
            <a class="dropdown-item" href="news-single.html">News Single</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
      <a href="#" class="ticket">
        <img src="themes/web/images/icon/ticket.png" alt="ticket">
        <span>Buy Ticket</span>
      </a>
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->



<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Error Page</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Error Page</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--===================================
=            Error Section            =
====================================-->

<section class="section error">
	<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto">
				<div class="block text-center">
					<img src="themes/web/images/404.png" class="img-fluid" alt="404">
					<h3>Oops!... <span>Page Not Found.</span></h3>
          <h3>
            <?php
               echo __DIR__;
            ?>
          </h3>
					<a href="index.html" class="btn btn-main-md">Go to home</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Error Section  ====-->



<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->

<section class="map">
	<!-- Google Map -->
	<div id="map"></div>
	<div class="address-block">
		<h4>Docklands Convention</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>Street Address, Location, <br>City, Country.</span></li>
			<li><i class="fa fa-phone"></i><span>[00] 000 000 000</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">Get Direction</a>
	</div>
</section>

<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <div class="footer-logo">
              <img src="themes/web/images/footer-logo.png" alt="logo" class="img-fluid">
            </div>
            <ul class="social-links-footer list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-rss"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="#">Eventre</a> &#169; 2017 All Right Reserved</p>
        </div>
      </div>
      <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="themes/web/plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="themes/web/plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="themes/web/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="themes/web/plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="themes/web/plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="themes/web/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="themes/web/plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="themes/web/plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="themes/web/js/custom.js"></script>
</body>

</html>