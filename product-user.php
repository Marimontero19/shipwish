<?php

$page = '| Product User'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container">

	<di  class="container_12 container_10 container_8 container_6 ">

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
								<button>
									<span class="icon">
										<img src="img/icons/negociate.svg" alt="negociate">
									</span>
									Negociate
								</button>
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
								<img src="img/icons/info.svg" alt="info">  
								<h3><img src="img/icons/money.svg" class="icon-circle" alt="money"></h3>
								<h3>Reward &nbsp; $12</h3>
								<ul>
									<li class="reward-description"><h5>Cost of the product: $8</h5></li>
									<li class="reward-description"><h5>Total inversion in this deal: $20</h5></li>
								</ul>
							</li>

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
								<h3><img src="img/icons/food.svg" class="icon-circle" alt="food"></h3>
								<h3>Food</h3>
							</li>
						</ul>
					</div>
				</div>

				<div id="gallery-product"class="grid_5_1200 grid_4_1024 grid_4_768 grid_6_320 push_1_1200">				
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
			<div class="main-container">
				<div class="container_12 container_10 container_8 container_6">		
					<section id="negociations" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200" >
						<h2><img src="img/icons/negociate.svg" alt="negociating">3 | Negociations</h2>
						


						<div id="table-negociations">

						<fieldset>
	
							<table role="grid" id="traveler-options">
									<thead>
										<tr>
											<th colspan="3"><img src="img/icons/user2.svg" alt="traveler">Traveler</th>
											<th colspan="2"><img src="img/icons/trophy.svg" alt="trophy">Reward</th>
											<th colspan="2"><img src="img/icons/calendar2.svg" alt="calendar">Delivery</th>
											<th colspan="3">Aproval</th>
											<th colspan="3">Message</th>
	    								</tr>
	  								</thead>

	  								<tbody>
	  									<tr>
	  										<td>
		  										<span class="user-pic">
		  											<a href="profile-public.php"><img src="img/users_pic/user_9_xs.jpg" alt="user_9"></a>
												</span>
	  										</td>

	  										<td>
		  										<span class="traveler-name">María Muñoz</span>
	  										</td>

	  										<td>
		  										<span class="reward-proposal">$50</span>
	  										</td>

	  										<td>
		  										<span class="date-arrival">July 7th,2015</span>
	  										</td>


	  										<td>
		  										<a href="#" class="block-link action-msg">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/check.svg" alt="check"></span>
			  									</a>
	  										</td>

	  										<td>
		  										<a href="#" class="block-link action-delete">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/message2.svg" alt="cross"></span>
			  									</a>
	  										</td>
	    								</tr>

	  									<tr>
	  										<td>
		  										<span class="user-pic">
		  											<a href="profile-public.php"><img src="img/users_pic/user_9_xs.jpg" alt="user_9"></a>
												</span>
	  										</td>

	  										<td>
		  										<span class="traveler-name">María Muñoz</span>
	  										</td>

	  										<td>
		  										<span class="reward-proposal">$50</span>
	  										</td>

	  										<td>
		  										<span class="date-arrival">July 7th,2015</span>
	  										</td>


	  										<td>
		  										<a href="#" class="block-link action-msg">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/check.svg" alt="check"></span>
			  									</a>
	  										</td>

	  										<td>
		  										<a href="#" class="block-link action-delete">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/message2.svg" alt="cross"></span>
			  									</a>
	  										</td>
	    								</tr>

	    								<tr>
	  										<td>
		  										<span class="user-pic">
		  											<a href="profile-public.php"><img src="img/users_pic/user_9_xs.jpg" alt="user_9"></a>
												</span>
	  										</td>

	  										<td>
		  										<span class="traveler-name">María Muñoz</span>
	  										</td>

	  										<td>
		  										<span class="reward-proposal">$50</span>
	  										</td>

	  										<td>
		  										<span class="date-arrival">July 7th,2015</span>
	  										</td>


	  										<td>
		  										<a href="#" class="block-link action-msg">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/check.svg" alt="check"></span>
			  									</a>
	  										</td>

	  										<td>
		  										<a href="#" class="block-link action-delete">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/message2.svg" alt="cross"></span>
			  									</a>
	  										</td>
	    								</tr>

	  								</tbody>
								</table>

							</fieldset>
						</div>
					
					</section>
				</div>
			</div>
		</div>

<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>