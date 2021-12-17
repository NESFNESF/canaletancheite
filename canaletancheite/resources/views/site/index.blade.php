<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>L'entreprise CANAL ETANCHEITE met ses services à votre disposition pour tous vos problèmes d'étancheités</title>

    <!-- CSS Files
        ========================================================================= -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/color_3.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
      <link href="css/canal.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>





        <div class="icon_div">

<ul>


    <li><a href="#" class="fa fa-facebook"></a></li>
    <li><a href="#" class="fa fa-twitter"></a></li>
    <li><a href="#" class="fa fa-linkedin"></a></li>
    <li><a href="#" class="fa fa-instagram"></a></li>
    <li><a href="#" class="fa fa-google"></a></li>
    <li><a href="#" class="fa fa-whatsapp"></a></li>



</ul>
        </div>





	<!-- menu
        ========================================================================= -->
  <div class="menu_dark2">
	    <div class="navsticky">
			<nav class="navbar navbar-topaz" role="navigation">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			     <div class="menu_dark2_logo_center">
			      	<a class="navbar-brand" href="{{ route('accueil') }}"><h4 style="color:white ">CANAL ETANCHEITE </h4></a>
			      </div>
			    <div class="collapse navbar-collapse menu_dark2_navbar" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-left">
			      	<li><a href="{{ route('accueil') }}">Accueil</a></li>
			        <li><a href="index.html#team">Expérience</a></li>
			         <li class="dropdown">
			          <a href="" class="dropdown-toggle" data-toggle="dropdown">Activités <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="{{ route('activite_1') }}">Diagnostic de l’état du patrimoine</a></li>
			            <li><a href="{{ route('activite_2') }}">Entretien toitures</a></li>
			            <li><a href="{{ route('activite_3') }}">Recherche d’infiltrations</a></li>
                         <li><a href="{{ route('activite_4') }}">Réfection des toitures terrasses</a></li>
			            <li><a href="{{ route('activite_5') }}">Sécurisation des toitures</a></li>
			          </ul>
			        </li>
			      </ul>

			      <ul class="nav navbar-nav navbar-right">
			     	<li><a href="index.html#blog">Contact</a></li>
			        <li class="dropdown">
			          <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Actalités <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Avis clients</a></li>
			            <li><a href="#">Evènements</a></li>
			            <li><a href="#">Réalisations en cours</a></li>
			          </ul>
			        </li>
			        <li><a href="index.html#contact">Nos réalisations</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container -->
			</nav>
		</div>
	</div>


@yield('content')


	<!-- Footer
        ========================================================================= -->


	<footer>
		<div class="footer4">
			<div class="container text-center">
				<img class="img_logo" src="img/logo.png" alt="SERTIN">
				<p>Lorem ipsum dolor sit amet, consectetur minim veniam adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna das martou lokra walla loula elli yji soktras aliqua. Ut enim ad , quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod</p>
			<div class="contact2_social text-center">
					<a href="" class="footer4_social_btn link_hoverb"><i class="fa fa-facebook"></i> - facebook</a>
					<a href="" class="footer4_social_btn link_hoverb"><i class="fa fa-twitter"></i> - twitter</a>
					<a href="" class="footer4_social_btn link_hoverb"><i class="fa fa-google"></i> - google</a>
					<a href="" class="footer4_social_btn link_hoverb"><i class="fa fa-whatsapp"></i> - whatsapp</a>
				</div>
			</div>
		</div>
	</footer>


    <footer>
		<div class="footer">
			Copyright &copy; | Dev <a href="nganefabrice693@gmail.com" class="text_color">NESF</a>& <a class="text_color" href="#">Diana</a>
		</div>
	</footer>









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.0.min.js"></script>

    <!-- Plugins for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

	<!-- Jquery Appear -->
    <script src="js/jquery.appear.js"></script>

	<!-- jQuery Easing v1.3 -->
    <script src="js/jquery.easing.1.3.js"></script>

	<!-- Modernizr v2.7.1 -->
	<script src="js/modernizr-latest.js"></script>

	<!-- enquire -->
	<script src="js/enquire.min.js"></script>

	<!-- WoW animation -->
	<script src="js/wow.min.js"></script>

	<!-- Superslides - v0.6.2 - 2013-07-10 -->
	<script src="js/jquery.superslides.min.js"></script>

	<!-- FitVids 1.1 -->
	<script src="js/jquery.fitvids.js"></script>

	<!-- jQuery OwlCarousel v1.3.2 -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- jPlayer 2.6.0 -->
	<script src="js/jquery.jplayer.min.js"></script>

	<!-- Isotop -->
	<script src="js/jquery.isotope.min.js"></script>

	<!-- jQuery countTo Plugin -->
	<script src="js/jquery.countTo.js"></script>

	<!-- jQuery Pretty Photo -->
	<script src="js/jquery.prettyPhoto.js"></script>

	<!-- Sticky -->
	<script src="js/jquery.sticky.js"></script>

	<!-- Twitter Feeds -->
	<script src="js/twitter/jquery.tweet.js"></script>

	<!-- Nice Scroll -->
	<script src="js/jquery.nicescroll.js"></script>

	<!-- bxslider -->
	<script src="js/jquery.bxslider.min.js"></script>

	<!--jquery.mb.YTPlayer JS -->
	<script src="js/jquery.mb.YTPlayer.js"></script>

	<!-- One Page Nav -->
	<script src="js/jquery.nav.js"></script>

	<!-- Easy Pie Chart -->
	<script src="js/jquery.easy-pie-chart.js"></script>

	<!-- GMAP3 Plugin for JQuery -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="js/gmap3.min.js"></script>

	<!-- jQuery code for Masonry Blog -->
	<script src="js/script_masonryb.js"></script>

	<!-- jQuery code for plugins -->
    <script src="js/script.js"></script>


  </body>
</html>
