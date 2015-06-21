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
		<section id="chat-product">
			<div id="" class="grid_6_1200 push_1_1200 grid_5_1024 push_1_1024 grid_7_768 grid_5_320">
				<div class="chat-title">
					<img src="" alt="chat-icon" class="icon-medium chat-icon">
					<h2>Chat with August Sabadini</h2>
				</div>
				<div>
					<p>Ask what you need to the wisher in order to deliver the items. If you want to change the terms of the deal, you can <span class="action-color">start a negociation.</span></p>
					<textarea name="textarea"></textarea>
					<a href="#" class="button" data-reveal-id="loginToUse">SEND</a>

			</div>
			
			<div class="clear"></div>
		</section>

	</div>
</div>

<?php

$page = 'product-chat'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>








