<?php

	error_reporting(E_ERROR | E_PARSE);
	//Login stuff
	session_start();

	$userinfo = array(
	                'ana'=>'123',
	                'fulanito'=>'123'
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
		$logo_url = $logo_url.'logo-tizo-blanco-alt.svg';
		$topbar_class = ' class="home"';

	} else {
		$logo_url = $logo_url.'logo-tizo-verde.svg';


	}

?>
<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>tizō<?php //echo $page; ?></title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/normalize.css" />


		<!-- Carousel -->
		<link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/fonts.css">

		<!-- This is how you would link your custom stylesheet -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mj.css">
		<?php if ($page == 'tour') { ?>
			<link rel="stylesheet" href="css/c.css">
		<?php } ?>

		<script src="js/vendor/modernizr.js"></script>
	</head>

	<body<?php echo $topbar_class; ?>>

		<div class="contain-to-grid header-section"> <!-- .sticky -->
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="index.php"><img src="<?php echo $logo_url; ?>" alt="tizō" /></a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
				</ul>

				<section class="top-bar-section">

					<!-- Right Nav Section -->
					<ul class="right">
						<!-- <li class="active"><a href="#">Mis proyectos</a></li> -->

						<?php include('includes/'.$topbar_menu); ?>

						<li class="has-form search-form">
							<div class="row collapse">
								<div class="large-12 small-12 columns">
									<form class="search" method="post" action="page-art.php">
										<input type="search" name="q" placeholder="Busca talleres" autocomplete="off"/>
										<ul class="search-ac">
										    <li><a href="page-art.php">Arte</a></li>
										    <li><a href="page-art.php">Arte Escénica</a></li>
										    <li><a href="page-art.php">Auditivo</a></li>
										    <li><a href="page-art.php">Ciencias</a></li>
										    <li><a href="page-art.php">Espacio urbano</a></li>
										    <li><a href="page-art.php">Filming</a></li>
										    <li><a href="page-art.php">Lenguaje</a></li>
										    <li><a href="page-art.php">Matematicas</a></li>
										    <li><a href="page-art.php">Movimiento</a></li>
										    <li><a href="page-art.php">Música</a></li>
										    <li><a href="page-art.php">Redacción</a></li>
										    <li><a href="page-art.php">Robótica</a></li>
										    <li><a href="page-art.php">Sostenibilidad</a></li>
										</ul>
									</form>
    							</div>
								<!--
<div class="large-4 small-3 columns">
									<a href="#" class="button expand"><span class="icon"><?php include('icons/icon-search.svg'); ?></span></a>
    							</div>
-->
  							</div>
  						</li>
    				</ul>

				</section>

  			</nav>
		</div>

		<!-- CONTENT FILL WHEN SCROLL = 0 -->
		<div class="header-fill"></div>

