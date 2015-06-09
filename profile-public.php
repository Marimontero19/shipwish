<?php

$page = 'user-profile'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<!-- USER INFO COLUMN -->
<div class="main-container">
	<div class="container_12 container_10 container_8 container_6">
        
        <!-- USER-GENERAL-INFO -->
        
        <?php

        include('includes/user-general-info.php');

        ?>

		<!-- USER COMPLEMENTARY COLUMN -->
		<section id="user-detail-info" class="grid_7_1200 grid_7_1024 grid_8_768 grid_6_320">
			<!-- upcoming wishes -->
			<div class="upcoming-wishes">
				<div class="title">
					<span></span>
					<h2>5|Upcoming wishes</h2>
				</div>
				<!-- backward/forward-->
				<div class="backward-forward">
					<span class="bw"></span>
					<span class="fw"></span>
				</div>
				<!-- cards-->
				<div id="create_wisher_card"></div>
				<div id="wisher_card"></div>
				<div id="wisher_card"></div>
				<div id="wisher_card"></div>
			</div>
			<!-- upcoming trips -->
			<div class="upcoming-trips">
				<div class="title">
					<span></span>
					<h2>2|Upcoming trips</h2>
				</div>
				<!-- backward/forward-->
				<div class="backward-forward">
					<span class="bw"></span>
					<span class="fw"></span>
				</div>
				<!-- cards-->
				<div id="create_trip_card"></div>
				<div id="wisher_card"></div>
				<div id="wisher_card"></div>
			</div>
			<!-- reviews -->
			<div class="upcoming-trips">
				<div class="title">
					<span></span>
					<h2>23|Revies</h2>
				</div>
				<!-- backward/forward-->
				<div class="backward-forward">
					<span class="bw"></span>
					<span class="fw"></span>
				</div>
				<!-- user-reviews -->
				<!-- 1 -->
				<div class="review">
					<!-- user picture -->
					<div>
						<img src="" alt="" class="user-pic">
					</div>
					<!-- name -->
					<h3>
						Kimberly Ray
					</h3>			
					<!-- date -->
					<div class="review-date">
						dd/mm/aaaa
					</div>
					<!-- rating -->
					<div class="rating">
						<p>Rating</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<!-- description -->
					<p class="description">
						In the tumultuous business of cutting-in and attending to a whale, there is much running backwards and forwards among the crew. Now hands are wanted here, and then again hands are wanted there. almost entirely.
					</p>		
				</div>
				<!-- 2 -->
				<div class="review">
					<!-- user picture -->
					<div>
						<img src="" alt="" class="user-pic">
					</div>
					<!-- name -->
					<h3>
						Bobby Coleman
					</h3>			
					<!-- date -->
					<div class="review-date">
						dd/mm/aaaa
					</div>
					<!-- rating -->
					<div class="rating">
						<p>Rating</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<!-- description -->
					<p class="description">
						In the tumultuous business of cutting-in and attending to a whale, there is much running backwards and forwards among the crew. Now hands are wanted here, and then again hands are wanted there. almost entirely.
					</p>		
				</div>
				<!-- 3 -->
				<div class="review">
					<!-- user picture -->
					<div>
						<img src="" alt="" class="user-pic">
					</div>
					<!-- name -->
					<h3>
						Diana Johnston
					</h3>			
					<!-- date -->
					<div class="review-date">
						dd/mm/aaaa
					</div>
					<!-- rating -->
					<div class="rating">
						<p>Rating</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<!-- description -->
					<p class="description">
						In the tumultuous business of cutting-in and attending to a whale, there is much running backwards and forwards among the crew. Now hands are wanted here, and then again hands are wanted there. almost entirely.
					</p>		
				</div>					
			</div>
		</section>

	</div>
</div>



<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



