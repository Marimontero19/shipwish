<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container grid_12_1200 grid_10_1024 grid_8_768 grid_6_320">

	<div id="header_wishboard" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200 ">

		<div id="wish_trips" class="grid_12_1200 grid_10_1024 grid_8_768 grid_6_320 ">
			<a href="#" alt="Wish Board">Wish Board</a> |
			<a href="trips_board.php" alt="Trips Board">Trips Board</a>
		</div>

		<div id="user-search" class="grid_12_1200 grid_10_1024 grid_8_768 grid_4_320 ">
			 <form method="" action="">
		          <input type="text" name="from" value="">
		          <input type="text" name="to" value="">

		          <input type="submit" name="search" class="button search" value="Search" class="button">

		           <a href="create_trip.php" alt="Create Trip" class="button">
		         	Create Wish
		           </a>
	        </form>
		</div>

<hr>
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

	<!--Primer wish-->
		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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

	<!--Segundo wish-->

		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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

		<!--Tercer wish-->
		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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

	<!--Cuarto wish-->

		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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


		<!--Quinto wish-->
		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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

	<!--Sexto wish-->

		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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

		<!--Setimo wish-->
		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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

	<!--Octavo wish-->

		<div id="wisher_card" class="grid_5_1200 grid_5_1024">
			
			<div style="padding: 3% 3% 3% 3%">
				<div id="basic_info_home">
					<ul>
						<li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li>
						<li><h3 class="">Pecorino Romano Cheese</h3></li>
						<li><p>*3</p></li>
					</ul>					
				</div>

				<div class="display_inline_block">

					<div id="destination_home">
						<p>From:</p><h4>Italy</h4>
						<br>
						<p>To:</p><h4>Dublin</h4>
					</div>

					<div id="details_home">
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



	</div>

</div>

<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>


	












