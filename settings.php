<?php

$page = 'user-profile'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<section id="my-wishes">

	<div class="title">
		<h1>
			Settings
		</h1>
	</div>
	<!-- Measures -->
	<div class="subtitle">
		<h2>
			Change units:
		</h2>
		<form action="" class="user-info" class="measure-units" method="_POST">
			<label for="">Language</label>
			<select>
				<option>English</option>
				<option>English</option>
				<option>English</option>
			</select>
			<label for="">Curency</label>
			<select>
				<option>EUR</option>
				<option>USD</option>
			</select>
			<label for="">Measure</label>
			<select>
				<option>Cm</option>
				<option>In</option>
				<option>M</option>
			</select>
			<label for="">Weight</label>
			<select>
				<option>Ounces</option>
				<option>Pounds</option>
				<option>kg</option>
			</select>									
		</form>
	</div>
	<!-- Measures -->
	<div class="subtitle">
		<h2>
			Notifications
		</h2>
		<form action="" class="user-info" class="notifications-settings" method="_POST">
			<label for="">Comments</label>
			<input type="radio" name="notif-comments" value="notif1"> Notification 1	
			<input type="radio" name="notif-comments" value="notif2"> Notification 2	
			<input type="radio" name="notif-comments" value="notif3"> Notification 3	
			<label for="">Trips</label>
			<input type="radio" name="notif-trips" value="notif1"> Notification 1	
			<input type="radio" name="notif-trips" value="notif2"> Notification 2	
			<input type="radio" name="notif-trips" value="notif3"> Notification 3	
			<label for="">Wishes</label>
			<input type="radio" name="notif-wishes" value="notif1"> Notification 1	
			<input type="radio" name="notif-wishes" value="notif2"> Notification 2	
			<input type="radio" name="notif-wishes" value="notif3"> Notification 3									
		</form>
	</div>	


	<!-- Notifications -->
	<div class="subtitle">
		<h2>
			Draft (1)	
		</h2>
	</div>
	<div id="wisher_card"></div>
	<!-- Pasr -->
	<div class="subtitle">
		<h2>
			Past (1)	
		</h2>
	</div>
	<div id="wisher_card"></div>

</section>



<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>