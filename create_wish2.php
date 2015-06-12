<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


<div class="main-container">

	<div class="container_12 container_10 container_8 container_6">

		<section class="steps">

		</section>

		<section class="create_wish">
			<div id="second_step" class="grid_6_1200 grid_6_1024 grid_4_768 grid_6_320 push_2_1200">
				
				<div class="steps">
				</div>

				<div id="wish-category">
					<h1 class="titles_create_wish">What’s the product about?</h1>

					<form>
						<ul>
							<li>Food</li>
							<li>Fashion</li>
							<li>Electronics</li>
						</ul>

						<ul>
							<li>Home</li>
							<li>Documents&Books</li>
							<li>Other</li>
						</ul>
					</form>
				</div>


				<div id="wish-size">
					<h1 class="titles_create_wish">Size</h1>

					<form>
						<ul>
							<li><input type="radio" name="size" value="XS">XS</li>
							<li><input type="radio" name="size" value="S">S</li>
							<li><input type="radio" name="size" value="M">M</li>
							<li><input type="radio" name="size" value="L">L</li>
							<li><input type="radio" name="size" value="XL">XL</li>
						</ul>
					</form>
				</div>


				<div id="wish-description">
					<h1 class="titles_create_wish">Describe it a little bit more</h1>

					<form>
						<input>
					</form>
				</div>


				<div id="upload-picture">
					<h1 class="titles_create_wish">Upload a picture</h1>

					<form>
						<input>
					</form>
				</div>

				
			</div>

		</section>


	</div>
</div>






<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>