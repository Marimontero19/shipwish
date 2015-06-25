<?php

$page = 'product-chat'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container">
	<div class="container_12 container_10 container_8 container_6">
        
 
        <!-- USER-GENERAL-INFO -->
        
        <?php

        include('includes/product-details.php');

        ?>

		<!-- USER COMPLEMENTARY COLUMN -->


		<section id="chat-product" class="grid_10_1024 ">

			<div id="icon" class="grid_1_1200 grid_1_1024 grid_1_768 grid_1_320">
				<div class="title">
						<span><img src="img/icons/chat.svg" alt="chat"></span>
				</div>
			</div>

			<div id="chat" class="grid_6_1200 grid_6_1024 grid_7_768 grid_6_320">
				<div class="title" >
					<h2>Chat with August Sabadini</h2>
				</div>
				<div id="chat-description">
					<p>Ask what you need to the wisher in order to deliver the items. If you want to change the terms of the deal, you can <span>start a negociation.</span></p>
				
					<form id="comment-form">
						<textarea id="submit" name="textarea" placeholder="ex. I can go to the airport and meet you to pick up the cheese."></textarea>
						<button id="submit">SEND</button>
					</form>

					<div id="upload-links">
						<!--<input type="file" name="pic" accept="image/*">
  						<input type="submit">-->
						<img src="img/icons/upload_chat1.svg" alt=upload>
						<img src="img/icons/upload_chat2.svg" alt=upload>
						<img src="img/icons/location2.svg" alt=upload>

					</div>
			</div>



			<div id="newDivs">

				
    		
			</div>
			
			<div class="clear"></div>
		</section>

	</div>
</div>

<?php

$page = 'product-chat'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>








