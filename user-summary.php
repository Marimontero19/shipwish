<?php

$page = 'user-profile'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<section id="my-wishes">

	<div class="title">
		<h1>
			My Wishes
		</h1>
	</div>
	<!-- Upcoming -->
	<div class="subtitle">
		<h2>
			Upcoming (3)	
		</h2>
	</div>
	<div id="wisher_card"></div>
	<div id="wisher_card"></div>
	<div id="wisher_card"></div>
	<div id="wisher_card"></div>
	<div id="wisher_card"></div>

	<!-- Draft -->
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
