<?php

$page = 'wish_board'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<!--
<hr class="full-width-line">
<hr class="full-width-line2">
-->
        <div id="header_wishboard">
            <div class="main-container">
                <div id="wish_trips">
                    <a href="#" alt="Wish Board">Wish Board</a> |
                    <a href="trip_board.php" alt="Trips Board">Trips Board</a>
                </div>

                <div id="user-search">
                     <form method="" action="">
                          <input type="text" name="from" placeholder="From" value="" class="input-trips">
                          <input type="text" name="to" placeholder="To" value="" class="input-trips">

                          <input type="submit" name="search" class="button search" value="Search" class="button">

                           <button class="outline"><a href="create_trip.php" alt="Create Trip">Create Wish</a></button>
                    </form>
                </div>

                <div id="filters">

                        <select id="filter_date" class="">
                            <label><input type="text" class="datepicker"></label>    
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

 <div class="main-container">
    <div class="container_12 container_10 container_8 container_6">

		<div id="trip-description" class="grid_8_1200 grid_8_1024 grid_6_768 grid_6_320 push_2_1200 push_1_1024">
				<img src="img/icons/trip_board.svg" alt="trips">
				<div class="text-description">
					<h4>This are the travelers around the world that are willing to bring the objects you wish.</h4>
					<h3>Be the one finding the best traveler!</h3>
				</div>
		</div>


		<div id="trip-boards">
		<!--Primer wish-->
		<!--<div id="tripper_card" class="grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">-->
			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_9_xs.jpg" alt="user_9"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Mumbai</h4>
								<br>
								<p>To:</p><h4>Madrid</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>June 7th, 2015</h4>
								<ul>
									<li><img src="img/icons/boat.svg" alt="boat"></li>
									<li><img src="img/icons/m.svg"  alt="medium"></li>
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

			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_10_xs.jpg" alt="user_10"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Galway</h4>
								<br>
								<p>To:</p><h4>Dublin</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>December 2th, 2015</h4>
								<ul>
									<li><img src="img/icons/bus.svg" alt="bus"></li>
									<li><img src="img/icons/xl.svg"  alt="extra large"></li>
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
			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_11_xs.jpg" alt="user_11"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Ohio</h4>
								<br>
								<p>To:</p><h4>Rome</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>July 4th, 2015</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane"></li>
									<li><img src="img/icons/m.svg"  alt="medium"></li>
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

			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_12_xs.jpg" alt="user_12"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Barcelona</h4>
								<br>
								<p>To:</p><h4>Girona</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>August 1st, 2015</h4>
								<ul>
									<li><img src="img/icons/moto.svg" alt="moto"></li>
									<li><img src="img/icons/s.svg"  alt="s"></li>
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
			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_13_xs.jpg" alt="user_13"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Panamá</h4>
								<br>
								<p>To:</p><h4>Lisboa</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>July 20th, 2015</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane"></li>
									<li><img src="img/icons/s.svg"  alt="small"></li>
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

		<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_14_xs.jpg" alt="user_14"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Sidney</h4>
								<br>
								<p>To:</p><h4>Milano</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>Setember 3th, 2015</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane"></li>
									<li><img src="img/icons/l.svg"  alt="large"></li>
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
			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_15_xs.jpg" alt="user_15"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Paris</h4>
								<br>
								<p>To:</p><h4>Monaco</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>October 8th, 2015</h4>
								<ul>
									<li><img src="img/icons/car.svg" alt="car"></li>
									<li><img src="img/icons/l.svg"  alt="large"></li>
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

			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_16_xs.jpg" alt="user_16"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Venecia</h4>
								<br>
								<p>To:</p><h4>Florencia</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>June 28th, 2015</h4>
								<ul>
									<li><img src="img/icons/helicopter.svg" alt="helicopter"></li>
									<li><img src="img/icons/s.svg"  alt="small"></li>
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
			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_17_xs.jpg" alt="user_17"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Atlanta</h4>
								<br>
								<p>To:</p><h4>Yala</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>June 7th, 2015</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane"></li>
									<li><img src="img/icons/m.svg"  alt="medium"></li>
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

			<div id="" class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_18_xs.jpg" alt="user_18"></a>					
						</div>

						<div id="destination_home_trips">
							<p>From:</p><h4>Caracas</h4>
							<br>
							<p>To:</p><h4>Oslo</h4>
						</div>

						<div id="details_home_trips">
							<p>Delivery:</p><h4>August 3th, 2015</h4>
							<ul>
								<li><img src="img/icons/plane.svg" alt="plane"></li>
								<li><img src="img/icons/s.svg"  alt="small"></li>
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
			 	    <a href=""><img src="img/icons/more.svg" alt="view more"></a>
			 </div>
		</div>
	</div>

</div>

<!--Footer-->
<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



	












