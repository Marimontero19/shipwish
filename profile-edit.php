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
        
        <!-- Finish editing -->
        <input type="button" class="finish-editing-profile grid_7_1200 grid_7_1024 grid_8_768 grid_6_320" name="finish-editing" value="finish editing profile" onclick="location.href='profile-public.php'">

		<!-- CUSTOM PROFILE -->
		<section id="user-customize-profile" class="grid_7_1200 grid_7_1024 grid_8_768 grid_6_320">
			<div class="personal-info">
				<!-- Personal info -->
				<div class="title">
					<span></span>
					<h2>Personal information</h2>
					<h3>Introduce yourself to the community</h3>
				</div>
				<form action="" class="user-info-edit" method="_POST">
					<!-- user picture -->
					<div class="small-pic-container">
						<img src="img/users_pic/user_1_xs.jpg" alt="user-1-m" class="user-pic">
					</div>
					<!-- name -->
					<label for="" class="unseen">Name</label>
					<input type="text" class="edit-name" name="user-name" value="Sameed Khan">
					<!-- location -->
					<div class="wide-set">
                        <span class="location-icon"></span>
                        <label for="" class="unseen">Location</label>
                        <select class="select-jquery">
                            <option>United Kingdom</option>
                            <option>United Kingdom</option>
                            <option>United Kingdom</option>
                        </select>
					</div>
					<!-- birthday -->
                    <fieldset>
                        <div class="set">
                            <label for="">Birthday</label>
                            <input class="edit-birthday datepicker" type="text" name="birthday-user" value="25 May 1982">
                        </div>
                        <div class="set">       
                            <!-- Gender -->
                            <label for="">Gender</label>
                            <input type="radio" name="gender" value="F">
                            <label for="female" class="radio">F</label>
                            <input type="radio" name="gender" value="M">
                            <label for="male" class="radio">M</label>
                        </div>
					</fieldset>
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
	</div>
</div>



<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



