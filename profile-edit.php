<?php

$page = '| Edit Profile'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
    <body class="animsition">
<!-- USER INFO COLUMN -->
<div class="main-container">
	<div class="container_12 container_10 container_8 container_6">
        
        <!-- USER-GENERAL-INFO -->
        
        <?php

        include('includes/user-general-info-2.php');

        ?>
        
        <!-- Finish editing -->
        <input type="button" class="finish-editing-profile grid_7_1024 grid_8_768 push_0_768 grid_6_320 push_0_320" name="finish-editing" value="finish editing profile" onclick="location.href='profile-public.php'">

		<!-- CUSTOM PROFILE -->
				<section id="user-customize-profile" class="grid_7_1200 push_1_1200 grid_6_1024 push_1_1024 grid_8_768 push_0_768 grid_6_320 push_0_320">
			<div class="personal-info">
				<!-- Personal info -->
				<div class="title">
					<span><img src="img/icons/personalinfo.svg" alt="personal-info"></span>
					<h2>Personal information</h2>
					<h3>Introduce yourself to the community</h3>
				</div>
				<form action="" class="user-info-edit" method="_POST">
					<!-- user picture -->
                    <input name="avatar" type="file" class="avatar">
                        <div class="fakefile small-pic-container">
                            <img src="img/users_pic/user_1_m.jpg" alt="user-1-m" class="user-pic">
                        </div>
					<!-- name -->
					<label for="" class="unseen">Name</label>
					<input type="text" class="edit-name" name="user-name" value="Sameed Khan">
					<!-- location -->
					<div class="wide-set">
                        <span class="location-icon">
                            <img src="img/icons/location_profile.svg" alt="location">
                        </span>
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
                            <input class="edit-birthday datepicker" type="text" name="birthday-user" value="05/25/1985">
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
					<label class="label" for="">Description</label>
					<textarea maxlength="140" name="description" placeholder="Tell everyone something about you">Electronics engineer. I am pasionate about new outcomes in technology. I work a lot, so I have developed a new passion about food. I like to discover new flavors and I have decided to start investigating new flavors of diferent culture in my free time.</textarea>		
					<!-- verification data -->
					<div class="verification-data">
							<div class="title">
								<span><img src="img/icons/verification.svg" alt="Verification"></span>
								<h2>Verification</h2>
								<h3>Verifying your information will help other trust you</h3>
							</div>
					<ul class="verify-list">
                        <li>
                            <h4>E-mail</h4>
                            <h5> sameed.kahn@gmail.com</h5>
                            <a title="Done. :)" class="verified"></a>
                        </li>
                        <li>
                            <h4>Facebook</h4>
                            <input type="button" name="facebook-connect" value="Connect with facebook">
                        </li>                             
                        <li>
                            <h4>Phone number</h4>
                            <h5>+31 678 895 765</h5>
                            <a title="Safety first." class="ask"></a>
                        </li>
                        <li>
                            <h4>Twitter</h4>
                            <input type="button" name="twitter-connect" value="Connect with twitter">
                        </li>                        
                        <li>
                            <h4>Credit card</h4>
                            <h5>xxxx xxxx xxxx 0034</h5>
                            <a title="Done. :)" class="verified"></a>
                        </li>
                        <li>
                            <h4>Google+</h4>
                            <input type="button" name="google-connect" value="Connect with google">
                        </li>
					</ul>
                    </div>
				</form>
			</div>

		</section>
	</div>
</div>



<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



