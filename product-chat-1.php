<?php

$page = '| Chat'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container">
	<div class="container_12 container_10 container_8 container_6">
        
 
        <!-- USER-GENERAL-INFO -->
        
        <?php

        include('includes/product-details-2.php');

        ?>

		<!-- USER COMPLEMENTARY COLUMN -->


		<section id="chat-product">

			<div id="icon" class="grid_1_1200 grid_1_1024 grid_1_768 grid_1_320">
				<div class="title">
						<span><img src="img/icons/chat.svg" alt="chat"></span>
				</div>
			</div>

			<div id="chat" class="grid_6_1200 grid_5_1024 grid_7_768 push_0_768 grid_6_320 push_0_320">
				<div class="title">
					<h2>Chat with María Martinez</h2>
				</div>
				<div id="chat-description">
					<p>Ask what you need to the wisher in order to deliver the items. If you want to change the terms of the deal, you can <span>start a negociation.</span></p>
				
					<form id="comment-form" class="comment-form">
						<textarea id="text" name="textarea" placeholder="ex. I can go to the airport and meet you to pick up the cheese."></textarea>
						<!--<button id="submit__" class="comment-submit">SEND</button>-->
						<input type="button" id="submit" class="comment-submit" value="SEND">
					</form>

					<div id="upload-links">
						<img src="img/icons/upload_chat1.svg" alt=upload>
						<img src="img/icons/upload_chat2.svg" alt=upload>
						<img src="img/icons/location2.svg" alt=upload>
					</div>
			</div>



			<div id="newDivs">

				<ul id="comment-list">
					<li class="comment-1">
	    				<div class="comment-user-photo">
	    					<a href=""><img src="img/users_pic/user_1_xs.jpg" class="user-pic" alt="user-9"></a>
	    				</div>
	    				<div class="wrote-comment" class="grid_5_1200 grid_4_1024 grid_6_768 grid_5_320">
	    					<p>Perfect! Tell me at what hour you arrive and I will meet you at the flights exit</p>
	    					<p class="chat-date">1/June/2015</p>
	    				</div>
	    			</li>

	    			<li class="comment-2">
	    				<div class="comment-user-photo-2">
	    					<a href=""><img src="img/users_pic/user_9_xs.jpg" class="user-pic" alt="user-9"></a>
	    				</div>
	    				<div class="wrote-comment-2" class="grid_5_1200 grid_4_1024 grid_6_768 grid_5_320">
	    					<p>I will like to bring you the product. Do you think we can meet at the airport?</p>
	    					<p class="chat-date">29/May/2015</p>
	    				</div>
	    			</li>

	    			
	    		</ul>
    		
			</div>
			
			<div class="clear"></div>
		</section>

	</div>
</div>

<!-- POPUP  -->
    
<div id="small-dialog" class="zoom-anim-dialog mfp-hide" style="max-width:750px;">

	<h1>Accept and seal the deal</h1>

	<div class="box-container">

	    <h4>Confirm that you understand and agree with the terms of the deal</h4>

	    <p class="box-title">Product</p>
	    <p class="product-name">Pecorino Romano Cheese</p>

		<p class="box-title">Delivery</p>
	    <p class="delivery-info-box">June 7th, 2015</p>

	    <p class="box-title">Costs</p>
	    <p class="delivery-info-box">Reward  $12</p>

	    <p class="extras-info">Cost of the product: $8</p>
	    <p class="extras-info">Total inversion in this deal: $20</p>
	    <p class="extras-info">Shipwish comission (3%): $0.60</p>

	    <p class="total-info-box">Total cost of the deal: $20.60</p>

	    <p class="legal-box">Shipwish will charge this money to the account you provided.<br>Shipwish will retain this money until the traveler has completed the delivery.</p>

	    <div id="buttons-process">

			<a href="product-chat-2.php" class=" final-btn-box"><button style="background-color:#F9A41A; max-width:400px;">Accept and seal deal</button></a>

			<div id="cancel-start">
				<p><a href="wish_board.php">Cancel Deal</a></p>
				<p><a href="product-negociation.php">Start Negociation</a></p>
			</div>

		</div>

    </div>

</div>

<?php

$page = 'product-chat'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>








