<?php

	error_reporting(E_ERROR | E_PARSE);
	//Login stuff
	session_start();

	$userinfo = array(
	                'ana'=>'123',
	                'camilo'=>'123'
	                );

	if(isset($_GET['logout'])) {
	    $_SESSION['username'] = '';
	    session_destroy();
	    header('Location:  ' . $_SERVER['PHP_SELF']);
	}

	if(isset($_POST['username'])) {
	    if($userinfo[$_POST['username']] == $_POST['password']) {
	        $_SESSION['username'] = $_POST['username'];
	    }else {
	        //Invalid Login
	    }
	}



	//Get menu, depending on whether logged in or out
	$topbar_menu = 'menu-loggedout.php';
	$reveal_collaborate = 'loginToUse';
	$reveal_follow = 'loginToUse';

	if(isset($_SESSION['username'])):
    	$topbar_menu = 'menu-loggedin.php';
    	$reveal_collaborate = 'collaborateForm';
    	$reveal_follow = 'nowFollowing';
    endif;

    	//Other starting variables
	$logo_url = 'img/';
	$topbar_class = '';

	if ($page=='home') {
		$logo_url = $logo_url.'.svg';
		$topbar_class = ' class="home"';

	} else {
		$logo_url = $logo_url.'.svg';

	}

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Shipwish <?php echo $page; ?></title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">

		<!-- Reset -->
		<link rel="stylesheet" href="css/normalize.css" />

		<!-- Grids -->
        <link rel="stylesheet" media="all and (min-width:1200px)" href="css/grid-1200.css" />
        <link rel="stylesheet" media="all and (max-width:1199px)" href="css/grid-1024.css" />
        <link rel="stylesheet" media="all and (max-width:1023px)" href="css/grid-768.css" />
		<link rel="stylesheet" media="all and (max-width:568px)" href="css/grid-320.css" />

		<!-- Carousel -->
		<link rel="stylesheet" type="text/css" href="js/flickity/flickity.css"/>
		

        <!-- 3rd party libraries -->
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/multistep_form.js"></script>
        <script src="js/librerias/dropzone.js"></script>
        <script src="js/librerias/modernizr.js"></script>  

        <script src="js/librerias/jquery.animsition.js"></script>        
        
        <!-- Our libraries -->
        <script src="js/shipwish-script.js"></script>
        <script src="js/shipwish-script2.js"></script>

        <script src="js/popup/jquery.magnific-popup.js"></script>

		<!-- Fonts -->
		<link rel="stylesheet" href="css/fonts.css">

		<!-- Stylsheets -->
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/mari.css">
		<link rel="stylesheet" href="css/camilo.css">
		<link rel="stylesheet" href="css/orlando.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/animsition.css">

		<link rel="stylesheet" href="js/popup/magnific-popup.css"> <!-- Lo he dejado aquí mientras tanto-->
		
		<?php if ($page == 'tour') { ?>
			<link rel="stylesheet" href="css/c.css">
		<?php } ?>
		
		<!-- TEST SCRIPTS -->
        <script>

            $(document).ready(function(){
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

            });
            
        </script>

	</head>

	<body<?php 
		if (strpos($_SERVER['PHP_SELF'],'product-chat.php')>0 
			or strpos($_SERVER['PHP_SELF'],'product-chat-1.php')>0
			or strpos($_SERVER['PHP_SELF'],'product-chat-2.php')>0
			or strpos($_SERVER['PHP_SELF'],'product-negociation.php')>0
			or strpos($_SERVER['PHP_SELF'],'product-negociation-2.php')>0
			or strpos($_SERVER['PHP_SELF'],'product-negociation-3.php')>0
			or strpos($_SERVER['PHP_SELF'],'profile-public.php')>0
			or strpos($_SERVER['PHP_SELF'],'profile-private.php')>0
			or strpos($_SERVER['PHP_SELF'],'profile-edit.php')>0) {
			echo ' class="fondoblanco"';
		}
	?>>

	<header>
		<div id="principal-menu" class="main-container">
		    <div class="container_12 container_10 container_8 container_6">
                <h1 class="grid_2_1200 grid_2_1024 grid_2_768 grid_2_320">
                    <a href="wish_board.php"> Shipwish </a>
                </h1>

                <div class="user-tools grid_2_1200 grid_2_1024 grid_3_768 grid_4_320">
                    
                   <ul>
                        <li>
                            <a class="button-dropdown-user" target="">
                                <img src="img/icons/user.svg" alt="user">
                            </a>
                            <!-- DROPDOWN -->
                            <ul class="dropdown-user animated fadeIn">
                            	<li>
                            		<a href="profile-private.php" target="_self">
                            			Profile
									</a>
                            	</li>
                            	<li>
                            		<a href="settings.php" target="_self">
                            			Settings
									</a>
                            	</li>
                            	<li>
                            	    <a href="my_wishes.php" target="_self">
                            			My Wishes
									</a>
                            	</li>
                            	<li>
                            	    <a href="my_trips.php" target="_self">
                            			My Trips
									</a>
                            	</li>
                            	<li>
                            	    <a href="#" target="_self">
                            			Watchlists
									</a>                            	
                            	</li>
                            	<li>
                            		<a href="index.php" target="_self">
                            			Logout
									</a>

                            	</li>
                            </ul>
                        </li>
                        <li>
                            <a href="" target="">
                                <img src="img/icons/bell.svg" alt="notifications">
                            </a>
                        </li>
                        <li>
                            <a href="product-chat.php" target="">
                                <img src="img/icons/message.svg" alt="message">
                            </a>
                        </li>				
                    </ul>
                </div>		        
		    </div>
		</div>
	</header>




