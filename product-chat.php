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

			<div id="icon" class="grid_1_1200 grid_1_1024 grid_1_768 grid_1_320">
				<div class="title">
						<span></span>
				</div>
			</div>

			<div id="chat" class="grid_6_1200 grid_5_1024 grid_7_768 grid_5_320">
				<div class="title">
		
					<h2>Chat with August Sabadini</h2>
				</div>
				<div id="chat-description">
					<p>Ask what you need to the wisher in order to deliver the items. If you want to change the terms of the deal, you can <span>start a negociation.</span></p>
				
					<form id="comment-form">
						<textarea id="submit" name="textarea" placeholder="ex. I can go to the airport and meet you to pick up the cheese."></textarea>
						<button id="submit">SEND</button>
					</form>

					<div id="upload-links">
						<p><input type="file" name="pic" accept="image/*"></p>
						<p><a href="#">icon</a></p>
					</div>
			</div>

			<div id="newDivs">
    	
    		Comentarios nuevos
			</div>
			
			<div class="clear"></div>
		</section>

	</div>
</div>

<?php

$page = 'product-chat'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>








