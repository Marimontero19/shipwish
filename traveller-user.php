<?php

$page = '| Traveller User'; //Por ejemplo 'home', 'userprofile', etc

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

					<div id="actions-user">
						<ul>
							<li style="display inline block">
								<img src="img/icons/edit.svg" alt="edit">
								<img src="img/icons/delete.svg" alt="delete">
							</li>
							<li>
								<a href="product-chat.php"><button class="">
									<span class="icon">
										<img src="img/icons/bell.svg" alt="notifications">
									</span>
									Notifications
								</button></a>
							</li>
							
							<li class="link"><span class="icon"><img src="" alt=""></span></li>
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

<div id="intro-recomendations">
	<div class="clear"></div>
	<div class="main-container">
		<div class="container_12 container_10 container_8 container_6 ">
			<section id="title-negociations" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">
				<h2><img src="img/icons/negociate.svg" alt="negociating">3 | Negociations</h2>
			</section>
		</div>
	</div>
</div>


<div id="recomendations-user">
			<div class="clear"></div>
			<div class="main-container">
				<div class="container_12 container_10 container_8 container_6">		
					<section id="negociations" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200" >
			
					  <div id="table-negociations">

						<div class="choose-traveler">
							<fieldset>
								<table role="grid" id="pending-collaborators" cellspacing=0>
									<thead>
										<tr>
											<th colspan="2"><img src="img/icons/user2.svg" alt="traveler"><h4>Wishers</h4></th>
											<th colspan="1"><img src="img/icons/items.svg" alt="items"><h4>Items</h4></th>
											<th colspan="1"><img src="img/icons/calendar2.svg" alt="calendar"><h4>Delivery</h4></th>
											<th colspan="1"></th>
											<th colspan="1"></th>
	    								</tr>
	  								</thead>

	  								<tbody>
	  								<!--User 1-->
	  									<tr>
	  										<td>
		  										<span class="table-image">
		  											<a href="profile-public.php"><img src="img/users_pic/user_7_xs.jpg" alt="user_7" class="user-pic"></a>
												</span>
	  										</td>
	  										<td>
		  										<span class="edit-collaborator-name">Judith Silva</span>
		  										
	  										</td>

	  										<td>
		  										<span class="reward-proposal">3 books</span>

	  										</td>

	  										<td>
		  										<span class="date-proposal">July 1st,2015</span>
	  										</td>

	  										<td>
		  										<a href="#" class="block-link action-delete">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/cross.svg" alt="cross"></span>
			  										 
			  									</a>
	  										</td>

	  										<td>
		  										<a href="product-chat.php"><!--class="block-link action-accept"-->
			  										 <span class="icon icon-manage-collab"><img src="img/icons/message2.svg" alt="message"></span>
			  										
			  									</a>
	  										</td>
	    								</tr>
										<!--User 2-->
	    								<tr>
	  										<td>
		  										<span class="table-image">
		  											<a href="profile-public.php"><img src="img/users_pic/user_8_xs.jpg" alt="user_8" class="user-pic"></a>
												</span>
	  										</td>
	  										<td>
		  										<span class="edit-collaborator-name">Frank Robinson</span>
		  										
	  										</td>

	  										<td>
		  										<span class="reward-proposal">Trausers, shirt, skirt, coat, 2 jackets…</span>

	  										</td>

	  										<td>
		  										<span class="date-proposal">June 28th,2015</span>
	  										</td>

	  										<td>
		  										<a href="#" class="block-link action-delete">
			  										<span class="icon icon-manage-collab"><img src="img/icons/cross.svg" alt="cross"></span>
		 
			  									</a>
	  										</td>

	  										<td>
		  										<a href="product-chat.php"><!--class="block-link action-accept"-->
			  										 <span class="icon icon-manage-collab"><img src="img/icons/message2.svg" alt="message"></span>
			  										
			  									</a>
	  										</td>
	    								</tr>
	    								<tr>
	  										<td>
		  										<span class="table-image">
		  											<a href="profile-public.php"><img src="img/users_pic/user_9_xs.jpg" alt="user_9" class="user-pic"></a>
												</span>
	  										</td>
	  										<td>
		  										<span class="edit-collaborator-name">María Martinez</span>
		  										
	  										</td>
											<!--User 3-->
	  										<td>
		  										<span class="reward-proposal">Pecorino cheese</span>

	  										</td>

	  										<td>
		  										<span class="date-proposal">June 15th,2015</span>
	  										</td>

	  										<td>
		  										<a href="#" class="block-link action-delete">
			  										 <span class="icon icon-manage-collab"><img src="img/icons/check.svg" alt="check"></span>
			  										 
			  									</a>
	  										</td>

	  										<td>
		  										<a href="product-chat.php"><!--class="block-link action-accept"-->
			  										 <span class="icon icon-manage-collab"><img src="img/icons/message2.svg" alt="message"><img></span>
			  										
			  									</a>
	  										</td>
	    								</tr>
	  								</tbody>
								</table>
							</fieldset>
						</div>
						</div>
					</section>
				</div>
			</div>
		</div>

<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>