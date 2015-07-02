<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Shipwish<?php //echo $page; ?></title>

	<!-- Reset -->
	<link rel="stylesheet" href="css/normalize.css" />

	<!-- Grids -->
    <link rel="stylesheet" media="all and (min-width:1200px)" href="css/grid-1200.css" />
    <link rel="stylesheet" media="all and (max-width:1199px)" href="css/grid-1024.css" />
    <link rel="stylesheet" media="all and (max-width:1023px)" href="css/grid-768.css" />
	<link rel="stylesheet" media="all and (max-width:568px)" href="css/grid-320.css" />

	<!-- Carousel 
	<link rel="stylesheet" type="text/css" href="js/librerias/slick/slick.css"/>-->

	<link rel="stylesheet" type="text/css" href="js/flickity/flickity.css"/>
	

    <!-- 3rd party libraries -->
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/popup/jquery.magnific-popup.js"></script>

    
    <!-- Our libraries -->
    <script src="js/shipwish-script.js"></script>
    <script src="js/librerias/modernizr.js"></script>

	<!-- Fonts -->
	<link rel="stylesheet" href="css/fonts.css">

	<!-- Stylsheets -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/camilo.css">
	<link rel="stylesheet" href="css/orlando.css">

	<link rel="stylesheet" href="js/popup/magnific-popup.css"> 
	
	<?php if ($page == 'tour') { ?>
		<link rel="stylesheet" href="css/c.css">
	<?php } ?>
	
	<!-- TEST SCRIPTS -->
    <script>

    $(document).ready(function(){

    	// Tab Activo
    	$(function() {
	    	$( "#tabs" ).tabs({
	    		active: tabs-1,
	    	});
		});

    	// Dar clase de Tab Activo
    	$('#tabs a').click(function(e) {

	    	$('#tabs .current').removeClass('current');  
		    $(this).addClass('current');  

		    e.preventDefault;  

		});  

		// Popup

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,
			
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});

    	// Parallax

    	
    	$(window).scroll(function(){

    		var top = $(window).scrollTop();
    		var number = (top/20);
    		number = 'center '+number+'px';

    		$('.hero-section').css(

    			'background-position', number

    		);

    	});

    });

    </script>
</head>
<body class="landing-bg">
	<header class="header-landing">
		<div class="main-container">
		    <div class="container_12 container_10 container_8 container_6">
                <h1 class="grid_3_1200 grid_2_1024 grid_2_768 grid_6_320">
                    <a href="#"> Shipwish </a>
                </h1>
                <div class="sign-in-section grid_3_1200 grid_2_1024 grid_3_768 grid_6_320">
                    <ul>
                        <li>
                            <a href="#small-dialog" target="" class="sign-up-btn popup-with-move-anim ">
                                Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="#small-dialog" target="" class="log-in-btn popup-with-move-anim">
                                Log In
                            </a>
                        </li>			
                    </ul>
                </div>		        
		    </div>
		</div>
	</header>

	<!-- HERO IMG SECTION-->

	<div class="hero-section" data-stellar-background-ratio="0.5">

		<h1 class="hero-text">Get what you want,<br>wherever you are</h1>

		<span class="search-landing">

			<div class="main-container">
			    <div class="container_12 container_10 container_8 container_6">

			    	<form action="">

				    	<input type="search" placeholder="What do you crave for?" class="search-input-landing grid_6_1200 grid_6_1024 grid_4_768 grid_6_320 push_2_1200">
				    	<input type="submit" value="GET IT!" class="search-submit-landing grid_2_1200 grid_2_1024 grid_2_768 grid_6_320 push_2_1200">

					</form>
			    </div>
		    </div>
		</span>

	</div>

	<!-- EXPLANATION SECTION -->

	<div class="explanation-section">

		<h3>How it works</h3>

		<div class="main-container">
			<div class="container_12 container_10 container_8 container_6">

				<div id="tabs">
				  <ul>
				    <li><a href="#tabs-1" class="tab-1 tab-select current grid_4_1200 grid_4_1024 grid_4_768 grid_6_320 push_2_1200 ">WISHER</a></li>
				    <li><a href="#tabs-2" class="tab-2 tab-select grid_4_1200 grid_4_1024 grid_4_768 grid_6_320 push_2_1200 ">TRAVELER</a></li>
				  </ul>

					<!-- Primer Tab -->

				  <div id="tabs-1" class="grid_12_1200 grid_10_1024 grid_8_768 grid_6_320">

				  	<div class="grid_12_1200 grid_10_1024 grid_8_768 grid_6_320">
				  			
					  	<h4 class="text-tab">Do you want a product but don't know how to find it?</h4>

				  	</div>

				    <div class="grid_3_1200 grid_3_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/wish-1.png">
				    	<h5>1. Complete your wish</h5>
				    	<p>Post the product name of your desire</p>
				    </div>

				    <div class="grid_3_1200 grid_3_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/wish-2.png">
				    	<h5>2. Receive offers and choose the best</h5>
				    	<p>Receive notifications from travelers doing the route you’re looking for</p>
				    </div>

				    <div class="grid_3_1200 grid_2_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/wish-3.png">
				    	<h5>3. Stay conected</h5>
				    	<p>Talk with the traveler anytime, anywhere</p>
				    </div>

				    <div class="grid_3_1200 grid_2_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/wish-4.png">
				    	<h5>4. Meet the traveler</h5>
				    	<p>Meet the traveler, receive and check your product, leave feedback</p>
				    </div>

				  </div>

				  <!-- Segundo Tab -->

				  <div id="tabs-2" class="grid_12_1200 grid_10_1024 grid_8_768 grid_6_320">

				  	<div class="grid_12_1200 grid_10_1024 grid_8_768 grid_6_320">
				  		
						<h4 class="text-tab ">Are you traveling and have an extra free space?</h4>

				  	</div>
				    
				    <div class="grid_3_1200 grid_3_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/pin.png">
				    	<h5>1. Pin your route!</h5>
				    	<p>Insert information about your trip, where you are going and when.</p>
				    </div>

				    <div class="grid_3_1200 grid_3_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/wish-2.png">
				    	<h5>2. Choose a wish</h5>
				    	<p>Select the wish that<br> fits your trip best</p>
				    </div>

				    <div class="grid_3_1200 grid_2_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/wish-3.png">
				    	<h5>3. Stay conected</h5>
				    	<p>Talk to the wisher anytime,<br> anywhere</p>
				    </div>

				    <div class="grid_3_1200 grid_2_1024 grid_4_768 grid_6_320">
				    	<img src="img/landing_pic/happy.png">
				    	<h5>4. Make a wisher happy!</h5>
				    	<p>Meet the wisher and fulfil his desire. Gain money for your trip’s budget!</p>

				  </div>
				</div>

			</div>
		</div>

	</div>

	<!-- EXPLANATION SECTION ENDS-->
	
	<div class="clear"></div>
	<div class="see-btns">
		<a href="wish_board.php" class="post-it-btn">See wishes</a>
		<a href="trip_board.php" class="post-it-btn">See trips</a>
	</div>

	<div class="main-container">
		<div class="travel-news container_12 container_10 container_8 container_6">
			<div class="grid_10_1200 grid_8_1024 push_1_1200 push_1_1024">
				<p>Just now,  August is travelling from Itlaly to Dublin, becoming the hero of Marco.</p>
			</div>
		</div>
	</div>


	<!-- ABOUT SECTION -->
	<div class="clear"></div>

	<div class="about-section">

		<div class="main-container">

			<div class="container_12 container_10 container_8 container_6">

				<h3>About Shipwish</h3>
				
				<div class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">

					<span><img src="img/landing_pic/verified-icon.png" alt="Verified"></span>
					<h5>Verified credentials</h5>
					<p>Validate your credentials with your email to be in the community.</p>
					
				</div>

				<div class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">

					<span><img src="img/landing_pic/rating-icon.png" alt="Rating"></span>
					<h5>Rating system</h5>
					<p>Check Wisher’s and Traveler’s profile or history and see if they are trustworthy.</p>
					
				</div>

				<div class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">

					<span><img src="img/landing_pic/internal-icon.png" alt="Chat"></span>
					<h5>Internal chat</h5>
					<p>Secure and fast chat, you don’t need to disclose personal emails.</p>
					
				</div>

				<div class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">

					<span><img src="img/landing_pic/secure-icon.png" alt="Secure Payments"></span>
					<h5>Secure Payments</h5>
					<p>All payments are SSL-encrypted and secure.</p>
					
				</div>

			</div>

		</div>

	</div>



	<!-- STORIES SECTION -->

	<div class="clear"></div>

	<div class="stories-section container_12 container_10 container_8 container_6">
		
		<h3>Our Stories</h3>

		<div class="story-1 grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			<div class="story-1-img"></div>
			<div class="text-section">
				<p>“We are from Finland but living in Barcelona...since a long time we were looking for these typical finnish biscuits. Thanks to Maria  now we have them!” </p>
				<p>- Collin and Tammy</p>
			</div>
		</div>
		
		<div class="story-2 grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			<div class="story-2-img"></div>
			<div class="text-section">
				<p>“I’m from Greece but established at Barcelona for two years now. Thanks to a traveler and Shipwish, I can celebrate the summer the way I do at my homeland” .</p>
				<p>- Myron</p>
			</div>
		</div>


	</div>
	

	<!-- ABOUT SECTION -->
	<div class="clear"></div>

	<div class="main-container">
		<div class="container_12 container_10 container_8 container_6">

			<a href="#small-dialog" class="wish-cta popup-with-move-anim grid_4_1200 grid_5_1024 grid_4_768 grid_6_320 push_2_1200">POST YOUR WISH</a>
			<a href="#small-dialog" class="trip-cta popup-with-move-anim grid_4_1200 grid_5_1024 grid_4_768 grid_6_320 push_2_1200">BECOME A TRAVELER</a>
			
		</div>
	</div>
	
	<!-- POPUP  -->
	
	<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
		<h1>Woot! You’re almost there.</h1>
		<h4>Just make an account and<br> get your wish posted.</h4>
		<input type="text" placeholder="Full Name">
		<input type="email" placeholder="Email">
		<input type="password" placeholder="Password">
		
		<input type="checkbox" name="vehicle" value="Bike">
		<label>I accept the Terms and Conditions</label>

		<input type="submit" value="Sign Up">

		<hr>

		<h5>or Sign up with</h5>
		<div class="social-sign">
			<a href="#" class=" fb-btn">Facebook</a>
			<a href="#" class=" gp-btn">Google +</a>
		</div>
	
	</div>


<?php

include('includes/footer.php');

?>

</body>
</html>