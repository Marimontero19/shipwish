<?php

$page = '| Trips'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<!--
<hr class="full-width-line">
<hr class="full-width-line2">
-->
	<body class="animsition">
<div id="header_tripboard">
            <div class="main-container" >
                <div id="traveler_trips">
                    <ul>
                    	<li>
                            <img src="img/icons/wishes2.svg" alt="Wishes">
                            <a href="wish_board.php" alt="Wishes">Wishes</a>
                        </li>

                         <li>
                            <img src="img/icons/trips2.svg" alt="trips">
                            <a href="#" alt="Trips">Trips</a>
                        </li>

                         <li>
                             <button><img src="img/icons/more2.svg" alt="more">
                            <a href="#" alt="Create Trip">New trip</a></button>
                        </li>
                     
                    </ul>
                </div>
                <div class="triangle-down-2">
                </div>
            </div>
        </div>


           

        <div id="header-search">
            <div class="main-container">
              <div  class="container_12 container_10 container_8 container_6 ">
                <div class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">
                     
                     <div id="user-search">

                        <h4>Which traveler are you looking for?</h4>

                         <form method="" action="">

                            <div class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">
                                  <input type="text" name="from" placeholder="From" value="" class="input-trips">
                                  <img src="img/icons/estela.svg" alt="Shipwish" class="stella">
                                  <input type="text" name="to" placeholder="To" value="" class="input-trips">
                                  <!--<input type="submit" name="search" value="" class="">-->
                                  <img src="img/icons/search.svg" alt="Shipwish">
                           
            <!--inicio filtros -->  

                                <div class="divspoiler">
                                    <img src="img/icons/filters.svg" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}" />
                                </div><div><div class="spoiler" style="display: none;">
                             
                                    <div id="filters">

                                        <input class="datepicker board_date" placeholder="Date">


                                        <select id="filter_details" class="select">
                                            <option value="*" selected="selected">Category</option>
                                            <option value=".food/beverage">Food/Beverage</option>
                                            <option value=".electronics">Electronics</option>
                                            <option value=".fashion">Fashion</option>
                                            <option value=".home/garden">Home/Garden</option>        
                                        </select> 

                                        <select id="filter_details" class="select">
                                            <option value="*"  selected="selected">Size</option>
                                            <option value=".xs">XS</option>
                                            <option value=".s">S</option>
                                            <option value=".m">M</option>
                                            <option value=".l">L</option>  
                                            <option value=".xl">XL</option> 
                                        </select> 

                                        <select id="filter_details" class="select">
                                            <option value="*" selected="selected">Reward</option>
                                            <option value=".money">Money</option>
                                            <option value=".volunteer">Volunteer</option>
                                        </select> 
                                        
                                       <input type="reset" value="Clear filters" class="clear_filter" />
                                       
                                    </div>
                                </div></div>
                            <!--final filtros -->  
                                </div>
                        </form>

                    </div>
                </div>
                <div class="clear"></div>
        </div>
    </div>
</div>

                

 <div class="main-container" style="background-color:#f9f9f9">
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
							<a href="traveller.php"><img class="user-pic" src="img/users_pic/user_9_xs.jpg" alt="user_9"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Italy</h4>
								<br>
								<p>To:</p><h4>Dublin</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>June 7th</h4>
								<ul>
									<li><img src="img/icons/boat.svg" alt="boat" title="Boat"></li>
									<li><img src="img/icons/m.svg"  alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
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
							<a href="traveller.php"><img class="user-pic" src="img/users_pic/user_10_xs.jpg" alt="user_10"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Cork</h4>
								<br>
								<p>To:</p><h4>Dublin</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>Dec. 2th</h4>
								<ul>
									<li><img src="img/icons/bus.svg" alt="bus" title="Bus" title="Bus"></li>
									<li><img src="img/icons/l.svg"  alt="large" title="The average of this is the size of a backpack"></li>
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
								<p>From:</p><h4>Miami</h4>
								<br>
								<p>To:</p><h4>Rome</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>July 4th</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane" title="Flight"></li>
									<li><img src="img/icons/m.svg"  alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
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
								<p>From:</p><h4>Olot</h4>
								<br>
								<p>To:</p><h4>Girona</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>Aug. 1st</h4>
								<ul>
									<li><img src="img/icons/moto.svg" alt="moto" title="Moto"></li>
									<li><img src="img/icons/s.svg"  alt="s" title="The average of this is the size of a mug or glasses"></li>
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
								<p>From:</p><h4>Chile</h4>
								<br>
								<p>To:</p><h4>Beja</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>July 20th</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane" title="Flight"></li>
									<li><img src="img/icons/s.svg"  alt="small" title="The average of this is the size of a mug or glasses"></li>
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
								<p>From:</p><h4>Perth</h4>
								<br>
								<p>To:</p><h4>Milan</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>Sept. 3th</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane" title="Flight"></li>
									<li><img src="img/icons/l.svg"  alt="large" title="The average of this is the size of a backpack"></li>
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
								<p>To:</p><h4>Basel</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>Oct. 8th</h4>
								<ul>
									<li><img src="img/icons/car.svg" alt="car" title="Car"></li>
									<li><img src="img/icons/l.svg"  alt="large" title="The average of this is the size of a backpack"></li>
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
								<p>From:</p><h4>Pisa</h4>
								<br>
								<p>To:</p><h4>Verona</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>July 20th</h4>
								<ul>
									<li><img src="img/icons/helicopter.svg" alt="helicopter" title="Helicopter"></li>
									<li><img src="img/icons/l.svg"  alt="large" title="The average of this is the size of a backpack"></li>
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
								<p>From:</p><h4>NY</h4>
								<br>
								<p>To:</p><h4>Yala</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>June 7th</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane" title="Flight"></li>
									<li><img src="img/icons/m.svg"  alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
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

			<div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
				
				<div style="padding: 3% 3% 3% 3%">

					<div class="display_inline_block">

						<div id="basic_info_home_trips">
							<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_18_xs.jpg" alt="user_18"></a>					
						</div>

						<div class="float-left">

							<div id="destination_home_trips">
								<p>From:</p><h4>Cali</h4>
								<br>
								<p>To:</p><h4>Oslo</h4>
							</div>

							<div id="details_home_trips">
								<p>Delivery:</p><h4>June 20th</h4>
								<ul>
									<li><img src="img/icons/plane.svg" alt="plane" title="Flight"></li>
									<li><img src="img/icons/m.svg"  alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
								</ul>
							</div>

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



	












