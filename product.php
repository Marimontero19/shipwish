<?php

$page = '| Product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
	<body class="animsition">
<div class="main-container">

	<div  class="container_12 container_10 container_8 container_6 ">

		<article class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">

			<section id="product-main-info">

				<div class="title">
					<h2>Pecorino Romano Cheese</h2>
				</div>

				<div id="basic-info-product">

					<div id="user-profile-info-product">
						<a href="user-profile"><img src="img/users_pic/user_1_m.jpg" alt="user-1-m" class="user-pic"></a>
						<h3>August Sabadini</h3>
					</div>

					<div id="product-details" >
						<div id="destination-product">
							<ul>
								<li><p>From:</p><h3>Italy</h3></li>
								<li><p>To:</p><h3>Dublin</h3></li>
							</ul>
						</div>

						<div id="info-product">
							<ul>
								<li><h3>Delivery:June 7th, 2015</h3></li>
								<li><h4>Number of items: 1</h4></li>
								<li><p>Posted 2 days ago</p></li>
							</ul>
						</div>

					</div>

					<div id="actions" class="">
						<ul>
							<li>
								<a href="product-chat.php"><button class="">
									<span class="icon">
										<img src="img/icons/ok.svg" alt="negociate">
									</span>
									Let's do it
								</button></a>
							</li>
							<li>
								<a href="product-negociation.php">
								<button>
									<span class="icon">
										<img src="img/icons/negociate.svg" alt="negociate">
									</span>
									Negociate
								</button>
								</a>
							</li>
							<li class="link"><span class="icon"><img src="" alt=""></span>Save to watchlist</li>
						</ul>
					</div>
					
					<div class="clear"></div>
				</div>
			</section>

			<section id="detail-info-product">

				<div id="description-product" class="grid_6_1200 grid_5_1024 grid_10_768 grid_6_320">
					<h3>Product Description</h3>
					<p>Pecorino Romano is one of most widely used, sharper alternatives to Parmesan cheeses. In Italy I found it on sundays markets or in the supermarket, where its easier to find it in a vacuum package. The brand that I prefered the most is Locatelli.</p>
					<div id="details-product">
						<ul>
							<li>
								<img src="img/icons/info.svg" alt="info" id="showdrop1">  
								<h3><img src="img/icons/money.svg" class="icon-circle" alt="money"></h3>
								<h3>Reward &nbsp; $12</h3>
										<div class="drop1">
											<p>The reward it’s aproximate, depending on the cost of the product when you get it, it can change.</p>
										</div>
								<ul>
									<li class="reward-description"><h5>Cost of the product: $8</h5>
										<div class="drop1">
											<p>The cost of the product is an aproximation made by the wisher, so feel free to check it first.</p>
										</div>
									</li>
									<li class="reward-description"><h5>Total inversion in this deal: $20</h5>
										<div class="drop1">
											<p>This is the addition of the reward and the cost of the product.</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<img src="img/icons/info.svg" alt="info" id="showdrop2"> 
								<h3><img src="img/icons/m.svg" class="icon-circle" alt="medium"></h3>
								<h3>Size &nbsp; Medium</h3>
								<ul>
									<li class="reward-description"><h5>Aproximate size: 30 x 40 cm</h5>
										<div class="drop2">
											<p>The reward it’s aproximate, depending on the cost of the product when you get it, it can change.</p>
										</div>
									</li>
									<li class="reward-description"><h5>Aproximate weight: 7.5 ounces</h5>
										<div class="drop2">
											<p>This weight is an aproximation from the wisher. If you have any restriction for
the characteristics of your trip, feel free to ask!</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<img src="img/icons/info.svg" alt="info" id="showdrop3"> 
								<h3><img src="img/icons/food.svg" class="icon-circle" alt="food"></h3>
								<h3>Food</h3>
									<div class="drop3">
											<p>The reward it’s aproximate, depending on the cost of the product when you get it, it can change.</p>
									</div>

									<div class="drop3">
											<uL>
												<li>
													<h4>Food</h4>
													<p>There are a lot of boring laws about traveling with food from one country to another, before accepting any deal, make sure it’s legal to bring that product.</p>
												</li>
												<li>
													<h4>Fashion</h4>
													<p>Keep always that you can the ticket with you, it’ll be the warrany for the wisher.</p>
												</li>
												<li>
													<h4>Home</h4>
													<p>Be careful with fragile objects, the goal is that they get in one piece ;)</p>
												</li>
												<li>
													<h4>Books</h4>
													<p>Books are easy to carry, make sure that you know the weight if you are traveling by plane.</p>
												</li>
												<li>
													<h4>Other</h4>
													<p>This is of everything that doesn’t fits in the other categories.</p>
												</li>
											</uL>

									</div>
							</li>
						</ul>
					</div>
				</div>

				<div id="gallery-product" class="grid_5_1200 grid_4_1024 grid_4_768 grid_6_320 push_1_1200">				
					<div class="gallery js-flickity" data-flickity-options='{ "imagesLoaded": true, "percentPosition": false }'>
  						<img src="img/product_pic/gallery_1.jpg" alt="Pecorino Cheese 1">
 						<img src="img/product_pic/gallery_2.jpg" alt="Pecorino Cheese 2">
  						<img src="img/product_pic/gallery_3.jpg" alt="Pecorino Cheese 3">
					</div>
					<div class="clear"></div>
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
						<h2>Similar wishes</h2>
						<!--1-->
			            <div class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">
			                <div class="wisher_card_container">
			                    <div id="basic_info_home">
			                        <ul>
			                            <li>
			                                <a href="user_profile.php">
			                                    <img class="user-pic" src="img/users_pic/user_2_xs.jpg" alt="user_2">
			                                </a>
			                            </li>
			                            <li>
			                                <h3 class="">Levis t-shirt, coat and dress</h3>
			                            </li>
			                            <!--<li><p>*3</p></li>-->
			                        </ul>					
			                    </div>

			                    <div class="display_block">

			                        <div id="destination_home" class="margin-left">
			                            <p>From:</p><h4>Italy</h4>
			                            <br>
			                            <p>To:</p><h4>Dublin</h4>
			                        </div>

			                        <div id="details_home" class="short-delivery-date">
			                            <p>Delivery:</p><h4>June 10th, 2015</h4>
			                            <ul>
			                                <li><img src="img/icons/fashion.svg" class="icon-circle" alt="fashion"></li>
			                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money"></li>
			                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium"></li>
			                            </ul>
			                        </div>
			                        <div class="clear"></div>
			                    </div>	
			                </div>	

			                <div class="button_look">
			                    <h4>Let's take a look</h4>
			                </div>
			            </div>
			            <!--2-->
			            <div class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">
			                <div class="wisher_card_container">
			                    <div id="basic_info_home">
			                        <ul>
			                            <li>
			                                <a href="user_profile.php">
			                                    <img class="user-pic" src="img/users_pic/user_3_xs.jpg" alt="user_3">
			                                </a>
			                            </li>
			                            <li>
			                                <h3 class="">Armchair, lamp and 2 pillows </h3>
			                            </li>
			                            <!--<li><p>*3</p></li>-->
			                        </ul>					
			                    </div>

			                    <div class="display_block">

			                        <div id="destination_home" class="margin-left">
			                            <p>From:</p><h4>Italy</h4>
			                            <br>
			                            <p>To:</p><h4>Dublin</h4>
			                        </div>

			                        <div id="details_home" class="short-delivery-date">
			                            <p>Delivery:</p><h4>June 20th, 2015</h4>
			                            <ul>
			                                <li><img src="img/icons/various.svg" class="icon-circle" alt="various"></li>
			                                <li><img src="img/icons/volunteer.svg" class="icon-circle" alt="various"></li>
			                                <li><img src="img/icons/xl.svg" class="icon-circle" alt="xl"></li>
			                            </ul>
			                        </div>
			                        <div class="clear"></div>
			                    </div>	
			                </div>	

			                <div class="button_look">
			                    <h4>Let's take a look</h4>
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