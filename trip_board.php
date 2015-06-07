<?php

$page = 'trip_board'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<hr class="full-width-line">
<hr class="full-width-line2">

<div class="main-container container_12 container_10 container_8 container_6">

	<div id="header_wishboard" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200 ">

		<div id="wish_trips">
			<a href="wish_board.php" alt="Wish Board">Wish Board</a> |
			<a href="#" alt="Trips Board">Trips Board</a>
		</div>

		<div id="user-search">
			 <form method="" action="">
		          <input type="text" name="from" placeholder="From" value="" class="input-trips">
		          <input type="text" name="to" placeholder="To" value="" class="input-trips">

		          <input type="submit" name="search" class="button search" value="Search" class="button">

		           <button class="outline"><a href="create_trip.php" alt="Create Trip">Add Trip</a></button>
	        </form>
		</div>



		<div id="filters">

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

	<div id="trip-boards">

	<!--Primer wish-->
		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>


	<!--Segundo wish-->

		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_2_xs.jpg" alt="user_2"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>


		<!--Tercer wish-->
		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_3_xs.jpg" alt="user_3"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>

	<!--Cuarto wish-->

		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_4_xs.jpg" alt="user_4"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>


		<!--Quinto wish-->
		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_5_xs.jpg" alt="user_5"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>

	<!--Sexto wish-->

	<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_6_xs.jpg" alt="user_6"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>

		<!--Setimo wish-->
		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_7_xs.jpg" alt="user_7"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>

	<!--Octavo wish-->

		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_8_xs.jpg" alt="user_8"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>

			<!--Noveno wish-->
		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_9_xs.jpg" alt="user_9"></a>					
					</div>

					<div class="float-left">

						<div id="destination_home_trips">
							<p>From:</p><h4>Italy</h4>
							<br>
							<p>To:</p><h4>Dublin</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>June 7th, 2015</h4>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

					</div>

				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>
			
	

	<!--Decimo wish-->

		<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
			
			<div style="padding: 3% 3% 3% 3%">

				<div class="display_inline_block">

					<div id="basic_info_home_trips">
						<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_10_xs.jpg" alt="user_1"></a>					
					</div>

					<div id="destination_home_trips">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home_trips">
						<p>Delivery:</p><h4>June 7th, 2015</h4>
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>	
			</div>	

			<div class="button_look">
				<a href="product_profile.php"><h4>Let's take a look</h4></a>
			</div>

		</div>

		<!--FINAL DE WISHES-->

		<div class="center grid_12_1200">
		 	<button>See more trips</button>
		 </div>

	</div>

</div>




	












