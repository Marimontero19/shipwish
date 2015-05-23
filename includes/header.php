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
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Shipwish:<?php //echo $page; ?></title>

		<!-- Reset -->
		<link rel="stylesheet" href="css/normalize.css" />

		<!-- Grids -->
		<link rel="stylesheet" media="all and (max-width:480px)" href="css/grid-320.css" />
		<link rel="stylesheet" media="all and (min-width:481px)" href="css/grid-768.css" />
		<link rel="stylesheet" media="all and (min-width:769px)" href="css/grid-1024.css" />
		<link rel="stylesheet" media="all and (min-width:1025px)" href="css/grid-1200.css" />

		<!-- Fonts -->
		<link rel="stylesheet" href="css/fonts.css">

		<!-- Stylsheets -->
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/mari.css">
		<link rel="stylesheet" href="css/camilo.css">

		<?php if ($page == 'tour') { ?>
			<link rel="stylesheet" href="css/c.css">
		<?php } ?>

		<!-- IE -->
		<script src="js/librerias/modernizr.js"></script>

	</head>

	<body>
