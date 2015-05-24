<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<div class="main-container">

	<div id="" class="">
		<div id="">
			<a href="wish_board.php" alt="Wish Board">Wish Board</a>
			|
			<a href="trips_board.php" alt="Trips Board">Trips Board</a>
		</div>

		<div id="user-search">
			 <form class="" method="" action="">
	          <input type="text" name="from" value="">
	          <input type="text" name="to" value="">

	          <input type="submit" name="search" class="button search" value="Search">

	           <a href="create_trip.php" alt="Create Trip" class="button">
	         	Create Wish
	           </a>
	        </form>
		</div>

		<div id="filters">

				<select id="filter_date" class="">
		        	        
		    	</select> 

		
				<select id="filter_category" class="">
		        	<option value="*">All</option>
		        	<option value=".red"></option>
		        	<option value=".green"></option>
		        	<option value=".blue"></option>
		        	<option value=".yellow"></option>        
		    	</select> 

		    	<select id="filter_size" class="">
		        	<option value="*">All</option>
		        	<option value=".xs">XS</option>
		        	<option value=".s">S</option>
		        	<option value=".m">M</option>
		        	<option value=".l">L</option>  
		        	<option value=".xl">XL</option> 
		    	</select> 

		    	<select id="filter_reward" class="">
		        	<option value="*">All</option>
		        	<option value=".money">Money</option>
		        	<option value=".airporttransfer">Airport Transfer</option>
		        	<option value=".touristday">Tourist Day</option>
		        	<option value=".gift">Gift</option>  
		        	<option value=".meal">Meal</option>
		    	</select> 
		</div>
	</div>

	<div id="trip-boards">

	</div>



</div>









<?php

include('includes/footer.php');

?>