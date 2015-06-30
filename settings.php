<?php

$page = 'user-profile'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<section id="global-settings">

	<div class="title">
		<div class="main-container">
		    <div class="container_12 container_10 container_8 container_6">

				<h1>
					Settings
				</h1>

			</div>	
		</div>
	</div>

	<!-- Measures -->

	<div class="subtitle">
		<div class="main-container">
		    <div class="container_12 container_10 container_8 container_6">
				<h2>
					Global units
				</h2>
			</div>
		</div>
	</div>

	<div class="main-container">
		<div class="container_12 container_10 container_8 container_6">

			<form action="" class="user-info measure-units"  method="_POST">
				
				<div class="grid_2_1200 grid_2_1024 grid_2_768 grid_6_320">
					<label for="">Language</label><br>
					<select>
						<option>English</option>
						<option>English</option>
						<option>English</option>
					</select>
				</div>

				<div class="grid_2_1200 grid_2_1024 grid_2_768 grid_6_320 push_1_1200">
					<label for="">Curency</label><br>
					<select>
						<option>EUR</option>
						<option>USD</option>
					</select>
				</div>


				<div class="grid_2_1200 grid_2_1024 grid_2_768 grid_6_320 push_2_1200">
					<label for="">Measure</label><br>
					<select>
						<option>Cm</option>
						<option>In</option>
						<option>M</option>
					</select>
				</div>


				<div class="grid_2_1200 grid_2_1024 grid_2_768 grid_6_320 push_3_1200">
					<label for="">Weight</label><br>
					<select>
						<option>Ounces</option>
						<option>Pounds</option>
						<option>kg</option>
					</select>
				</div>



			</form>

		</div>
	</div>
	
	<div class="clear"></div>	

	<!-- Measures -->
	<div class="subtitle">
		<div class="main-container">
		    <div class="container_12 container_10 container_8 container_6">
				<h2>
					Notifications
				</h2>
			</div>
		</div>
	</div>

	<div class="main-container">
	    <div class="container_12 container_10 container_8 container_6">

			<form action="" class="user-info notifications-settings" method="_POST">
				
				<div >
					<label for="">Comments</label><br>
					<span><input type="radio" name="notif-comments" value="notif1"><p>Notification 1</p></span><br> 	
					<span><input type="radio" name="notif-comments" value="notif2"><p>Notification 2</p></span><br> 	
					<span><input type="radio" name="notif-comments" value="notif3"><p>Notification 3</p></span><br> 
				</div>
				
				<div >				
					<label for="">Trips</label><br>
					<span><input type="radio" name="notif-trips" value="notif1"><p>Notification 1</p></span><br> 	
					<span><input type="radio" name="notif-trips" value="notif2"><p>Notification 2</p></span><br> 	
					<span><input type="radio" name="notif-trips" value="notif3"><p>Notification 3</p></span><br>
				</div>

				<div >
					<label for="">Wishes</label><br>
					<span><input type="radio" name="notif-wishes" value="notif1"><p>Notification 1</p></span><br> 	
					<span><input type="radio" name="notif-wishes" value="notif2"><p>Notification 2</p></span> <br>	
					<span><input type="radio" name="notif-wishes" value="notif3"><p>Notification 3</p></span><br> 
				</div>									
			</form>

		</div>
	</div>
		

</section>



<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>