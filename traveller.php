<?php

$page = '| Traveller'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container">

	<div  class="container_12 container_10 container_8 container_6 ">

		<article class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">

			<section id="product-main-info">


				<div id="basic-info-product">

					<div id="user-profile-info-product">
						<a href="user-profile"><img src="img/users_pic/user_9_m.jpg" alt="user-9-m" class="user-pic"></a>
						<h3>María Martinez</h3>
					</div>

					<div id="product-details" >
						<div id="destination-product">
							<ul>
								<li><p>From:</p><h3>Italy</h3></li>
								<li><p>To:</p><h3>Dublin</h3></li>
							</ul>
						</div>

						<div id="info-arrival">
							<h3>Arriving on June 7th, 2015</h3>
						</div>

					</div>

					<div id="actions-2" class="">
						<ul>
							<li>
								<a href="product-chat.php"><button class="">
									<span class="icon">
										<img src="img/icons/ok.svg" alt="negociate">
									</span>
									Notify traveller
								</button></a>
							</li>
							
							<li class="link"><span class="icon"><img src="" alt=""></span>Save to watchlist</li>
						</ul>
					</div>
					
					<div class="clear"></div>
				</div>
			</section>

			<section id="detail-info-product">

				<div id="description-product" class="grid_6_1200 grid_5_1024 grid_10_768 grid_6_320">
					<h3>About the trip</h3>
					<p>I will be going to Dublin for a week to work, what gives me the opportunity to bring various products from Italy. 
					Anyone that is interested can send me a message to seal for places to meet. I will arrive on a weekend.</p>
				</div>

				<div id="details-product" class="grid_5_1200 grid_4_1024 grid_4_768 grid_6_320 push_1_1200" style="margin-bottom:25px;">
						<ul>
							<li>
								<img src="img/icons/info.svg" alt="info"> 
								<h3><img src="img/icons/m.svg" class="icon-circle" alt="medium"></h3>
								<h3>Size &nbsp; Medium</h3>
								<ul>
									<li class="reward-description"><h5>Aproximate size: 30 x 40 cm</h5></li>
									<li class="reward-description"><h5>Aproximate weight: 7.5 ounces</h5></li>
								</ul>

							</li>

							<li>
								<img src="img/icons/info.svg" alt="info"> 
								<h3><img src="img/icons/plane.svg" class="icon-circle" alt="food"></h3>
								<h3>Transport &nbsp; Plane</h3>
							</li>
						</ul>
					</div>	
			</section>
		</article>		
	</div>
</div>
		<div id="recomendations">
			<div class="clear"></div>
			<div class="main-container" class="full-width-gray">
				<div class="container_12 container_10 container_8 container_6">		
					<section id="similar-wishes" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200" >
						<h2>Similar trips</h2>
						<!--1-->
					    <div class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">
						
						<div style="padding: 3% 3% 3% 3%">

							<div class="display_inline_block">

								<div id="basic_info_home_trips">
									<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_12_xs.jpg" alt="user_12"></a>					
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
			            <!--2-->
			         <div class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">
						
						<div style="padding: 3% 3% 3% 3%">

							<div class="display_inline_block">

								<div id="basic_info_home_trips">
									<a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_14_xs.jpg" alt="user_14"></a>					
								</div>

								<div class="float-left">

									<div id="destination_home_trips">
										<p>From:</p><h4>Italy</h4>
										<br>
										<p>To:</p><h4>Dublin</h4>
									</div>

									<div id="details_home_trips">
										<p>Delivery:</p><h4>June 3th, 2015</h4>
										<ul>
											<li><img src="img/icons/plane.svg" alt="boat"></li>
											<li><img src="img/icons/L.svg"  alt="medium"></li>
										</ul>
									</div>

								</div>

							</div>	
						</div>	

						<div class="button_look">
							<a href="product_profile.php"><h4>Let's take a look</h4></a>
						</div>

					</div>

			              

		              <!-- <div class="center grid_12_1200">
		                	<button><a href="wish_board.php" alt="Wish Board">See more wishes</a></button>
		             	</div>-->
					
					</section>
				</div>
			</div>
		</div>

<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>