<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container">

	<div class="container_12 container_10 container_8 container_6 ">

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
								<li><p>From:</p><h4>Italy</h4></li>
								<li><p>To:</p><h4>Dublin</h4></li>
							</ul>
						</div>

						<div id="info-product">
							<ul>
								<li><h4>Quantity: 1</h4></li>
								<li><h2>Delivery:June 7th, 2015</h2></li>
								<li><h5>Posted 2 days ago</h5></li>
							</ul>
						</div>

					</div>

					<div id="actions" class="">
						<ul>
							<li><button><span class="icon"><img src="" alt=""></span>Let's do it</button></li>
							<li><button><span class="icon"><img src="" alt=""></span>Negociate</button></li>
							<li><button><span class="icon"><img src="" alt=""></span>Save to watchlist</button></li>
						</ul>
					</div>
					
					<div class="clear"></div>
				</div>
			</section>

			<section id="detail-info-product">

				<div id="description-product" class="grid_6_1200 grid_6_1024 grid_10_768 grid_6_320">
					<h3>Product Description</h3>
					<p>Pecorino Romano is one of most widely used, sharper alternatives to Parmesan cheeses. In Italy I found it on sundays markets or in the supermarket, where its easier to find it in a vacuum package. The brand that I prefered the most is Locatelli.</p>
					<ul>
						<li>
							<h4 class="icon-size">M</h4>
							<h4>Medium</h4>
						</li>

						<li>
							<h4><img class="icon-circle" src="" alt=""></h4>
							<h4>Food</h4>
						</li>

						<li>
							<h4><img class="icon-circle" src="" alt=""></h4>
							<h4>Total amount of money:$20<br>Cost of the product: $7</h4>
						</li>
					</ul>
				</div>

				<div class="gallery grid_5_1200 grid_5_1024 grid_10_768 grid_6_320 push_1_1200">				
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
		<div class="background-gray" style="width:100%;background-color:blue;">
			<div class="main-container">
				<div class="container_12 container_10 container_8 container_6 ">		
					<section id="similar-wishes" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320" >
						<h2>Similar wishes</h2>

					


					</section>
				</div>
			</div>
		</div>


<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>