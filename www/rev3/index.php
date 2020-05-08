<?php
    session_start();
    /*$SESSION = $_POST['username'];
    $_SESSION['username'] = $username;
    if(!isset($_SESSION['username'])){
        header('location: login/signin.html');
    }
    $_SESSION['username'] = $_POST['name'];*/

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<title>UECS</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/templatemo-style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

        <!-- start header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-phone"></i><span> Phone</span>0112 635 268</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-envelope-o"></i><span> Email</span><a href="kdu_uni@ac.lk">kdu_uni@ac.lk</a></p>
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <ul class="social-icon">
                            <li><span>Meet us on</span></li>
                            <li><a href="https://www.facebook.com/KotelawalaDefenceUniversity/" class="fa fa-facebook"></a></li>
                            <li><a href="https://www.youtube.com/user/KDU443" class="fa fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">UECS</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->

    	<!-- start home -->
    	<section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
					<h1><span>UECS</span></h1>
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">University Eligibility Checking System </h1>
    					<div class="element">
                            <div class="sub-element">Find your best path</div>
                            <div class="sub-element">Is this what you are looking for</div>
                            <div class="sub-element">We are here to help you</div>
                        </div>
                        <h2 style="text-align:left;">Welcome</h2>
						<a data-scroll href="database/logout.php" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">Log Out</a>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end home -->

    	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"> <span>UECS</span></h2>
    				</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-mobile"></i>
								
								<h2><center>Step I </center></h2></div>
								<h3 class="media-heading"><a href="form.html">Enter your details here for processing.</a></h3>
							</div>
							<div class="media-body"></div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								<h2><center>Step II </center></h2></div>
								<h3 class="media-heading"><a href="#">Filtered degree contents according to each Stream.</a></h3>
							</div>
							<div class="media-body">
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-html5"></i>
								<h2><center>Step III </center></h2></div>
								<h3 class="media-heading"><a href="#">Output degree(s) most probable to be selected into</a></h3>
							</div>
							<div class="media-body">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end about -->

    	

    	

    	

    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>UECS</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="#" method="post">
    						<label>NAME</label>
    						<input name="fullname" type="text" class="form-control" id="fullname">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>
    						
                            <input type="submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>Faculty of Computing ,  General Sir John Kotalawala Defence University</span>
    						<p><i class="fa fa-phone"></i> 0112 635 268</p>
    						<p><i class="fa fa-envelope-o"></i> kdu_uni@ac.lk</p>
    						<p><i class="fa fa-map-marker"></i> Kandawala Road, Rathmalana 10390</p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="https://www.facebook.com/KotelawalaDefenceUniversity/" class="fa fa-facebook"></a></li>
    						<li><a href="https://www.youtube.com/user/KDU443" class="fa fa-youtube"></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        UECS &copy; Copyright 2019.</p><p>* This site only provides guidance. You cannot apply for UGC universities through this site. </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

	</body>
</html>