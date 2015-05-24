<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container grid_12_1200 grid_10_1024 grid_8_768 grid_6_320">

	<div id="header_wishboard" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200 ">

		<div id="wish_trips" class="grid_4_1200 grid_4_1024 grid_4_768 grid_4_320 ">
			<h3><a href="wish_board.php" alt="Wish Board">Wish Board</a></h3>|
			<h3><a href="trips_board.php" alt="Trips Board">Trips Board</a></h3>
		</div>

		<div id="user-search" class="grid_12_1200 grid_10_1024 grid_8_768 grid_4_320 ">
			 <form class="" method="" action="">
	          <input type="text" name="from" value="">
	          <input type="text" name="to" value="">

	          <input type="submit" name="search" class="button search" value="Search">

	           <a href="create_trip.php" alt="Create Trip" class="button">
	         	Create Wish
	           </a>
	        </form>
		</div>

		<div id="filters" class="grid_12_1200 grid_10_1024 grid_8_768 grid_6_320">


				<select id="filter_date" class="">
					<!--<p>Date: <input type="text" id="datepicker"></p>-->       
		    	</select> 

		
				<select id="filter_category" class="">
		        	<option value="*">All</option>
		        	<option value=".food/beverage">Food/Beverage</option>
		        	<option value=".electronics">Electronics</option>
		        	<option value=".fashion">Fashion</option>
		        	<option value=".home/garden">Home/Garden</option>        
		    	</select> 

		    	<select id="filter_size" class="">
		        	<option value="*">All</option>
		        	<option value=".xs">XS</option>
		        	<option value=".s">S</option>
		        	<option value=".m">M</option>
		        	<option value=".l">L</option>  
		        	<option value=".xl">XL</option> 
		    	</select> 

		    	<select id="filter_reward" class="">
		        	<option value="*">All</option>
		        	<option value=".money">Money</option>
		        	<option value=".airporttransfer">Airport Transfer</option>
		        	<option value=".touristday">Tourist Day</option>
		        	<option value=".gift">Gift</option>  
		        	<option value=".meal">Meal</option>
		    	</select> 


	          <input class="" type="submit" name="search" class="button search" value="Clear filters">
		</div>
	</div>

	<div id="trip-boards" class="grid_10_1200 grid_10_1024 grid_8_768 grid_4_320 push_1_1200 push_1_1024 push_1_768 ">


		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>

		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>

		
		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>

		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>

		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>

		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>

		
		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>

		<div id="wisher_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_3_320">

		</div>
<!--
			<div id="wisher_info_home">
				<ul>
					<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
					<li><h3 class="" style="float:right">Pecorino Romano Cheese</h3></li>
					<li>3</li>
				</ul>

			</div>

			<section id="wish_details">
				<ul class="">
					<li>From: Italy</li>
					<li>To: Dublin</li>
				</ul>
				<ul class="" style="float:right">
					<li>Date of delivery: June 7th, 2015</li>
					<li>
						<ul class="details-wish">
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</li>
				</ul>

			</section>

			<section class="button look">
				<a href="user_profile.php">Let's take a look</a>
			</section>

		</div>

	</div>
-->


</div>










