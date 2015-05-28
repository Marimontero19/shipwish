<?php

$page = 'user-profile'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<!-- USER INFO COLUMN -->
<section ="user-general-info">
	<!-- USER INFO LIST STARTS -->
	<div class="user-info">
		<!-- editing profile button -->
		<a class="edit-profile-button">
			Edit profile
		</a>
		<!-- user picture -->
		<div>
			<img src="" alt="" class="user-pic">
		</div>
		<!-- name -->
		<h2>
			Sameed Khan
		</h2>
		<!-- location -->
		<span class="location-icon"></span>
		<h3>
			United Kingdom
		</h3>
		<!-- actions resume -->
		<div class="total-actions">
			<!-- total wishes -->
			<div class="total-wishes">
				<div class="wishes-icon circle"></div>
				<h4> 00 | Wishes </h4>
			</div>
			<!-- total trips -->
			<div class="total-trips">
				<div class="trips-icon circle"></div>
				<h4> 00 | Trips </h4>
			</div>
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
			Electronics engineer. I am pasionate about new outcomes in technology. I work a lot, so I have developed a new passion about food. I like to discover new flavors and I have decided to start investigating new flavors of diferent culture in my free time. 
		</p>
		<!-- Verified -->
		<div class="verification">
			<ul>
				<li>
					<div class="verificable social-icon"></div>
					<a href="" target="_self"></a>
				</li>
				<li>
					<div class="verificable social-icon"></div>
					<a href="" target="_self"></a>
				</li>
				<li>
					<div class="verificable social-icon"></div>
					<a href="" target="_self"></a>
				</li>
				<li>
					<div class="verificable social-icon"></div>
					<a href="" target="_self"></a>
				</li>
			</ul>
		</div>
	</div>
	<!-- USER INFO LIST ENDS -->
</section>

<!-- USER COMPLEMENTARY COLUMN -->
<section id="user-detail-info">
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

<!-- CUSTOM PROFILE -->
<section id="user-customize-profile">
	<!-- Finish editing -->
	<input type="button" name="finish-editing" value="finish editing profile">
	<div class="personal-info">
		<!-- Personal info -->
		<div class="title">
			<span></span>
			<h2>Personal information</h2>
			<h3>Introduce yourself to the community</h3>
		</div>
		<form action="" class="user-info" method="_POST">
			<!-- user picture -->
			<div>
				<img src="" alt="" class="user-pic">
			</div>
			<!-- name -->
			<label for="" class="unseen">Name</label>
			<input type="text" name="user-name" value="Sameed Khan">
			<!-- location -->
			<span class="location-icon"></span>
			<label for="" class="unseen">Location</label>
			<select>
				<option>United Kingdom</option>
				<option>United Kingdom</option>
				<option>United Kingdom</option>
			</select>
			<!-- birthday -->
			<label for="">Birthday</label>
			<input type="text" name="birthday-user" value="25 May 1982">
			<!-- Gender -->
			<label for="">Gender</label>
			<input type="radio" name="gender" value="F"> F	
			<input type="radio" name="gender" value="M"> M
			<!-- Description -->
			<textarea maxlength="140" name="description" placeholder="Tell everyone something about you"></textarea>		
			<!-- verification data -->
			<div class="Verification-data">
					<div class="title">
						<span></span>
						<h2>Verification</h2>
						<h3>Verifying your information will help other trust you</h3>
					</div>
			</div>
			<label for="">E-mail</label>
			<input type="email" name="user-mail">
			<label for="">Phone number</label>
			<label for="" class="unseen">Zone code</label>
			<input type="number" name="user-zone-code" size="2">
			<input type="number" name="user-phone" size="9">
			<label for="">Credit card</label>
			<input type="number" name="user-card" size="16">
			<label for="">Facebook</label>
			<input type="button" name="facebook-connect" value="Connect with facebook">
			<label for="">Twitter</label>
			<input type="button" name="twitter-connect" value="Connect with twitter">			
			<label for="">Google+</label>
			<input type="button" name="google-connect" value="Connect with google">
		</form>
	</div>

</section>



<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



