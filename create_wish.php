<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


<div class="main-container">

	<div class="container_12 container_10 container_8 container_6">

		<section class="create_wish">

			<form id="msform" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">
				<!-- progressbar -->
				<ul id="progressbar" class="grid_8_1200 grid_8_1024 grid_6_768 grid_6_320 push_2_1200 push_2_1024 push_1_768">
					<li class="active">Wish</li>
					<li>Details</li>
					<li>Delivery</li>
				</ul>
				<!-- fieldsets -->
					<fieldset id="first_step" class="grid_4_1200 grid_4_1024 grid_4_768 grid_6_320 push_4_1200">
						<label style="border:none" for="wish"><h1 class="titles_create_wish">What do you crave for?</h1></label>
						<input type="text" name="wish" id="wish" placeholder="Ex:A basket of sweet plantains"/>
						<input type="button" name="next" class="form_button next action-button" value="Next" />
					</fieldset>

					<fieldset id="second_step" class="grid_6_1200 grid_6_1024 grid_4_768 grid_6_320 push_2_1200">
							
							<div id="wish-category">
								<label for="product"><h1 class="titles_create_wish">What’s the product about?</h1></label>

								<ul class="">
									<li><input type="checkbox" name="product" id="product" value="Food"/><span>Food</span></li>
									<li><input type="checkbox" name="product" id="product" value="Fashion"/><span>Fashion</span></li>
									<li><input type="checkbox" name="product" id="product" value="Electronics"/><span>Electronics</span></li>
									<li><input type="checkbox" name="product" id="product" value="Home"/><span>Home</span></li>
									<li><input type="checkbox" name="product" id="product" value="Documents&Books"/><span>Documents&Books</span></li>
									<li><input type="checkbox" name="product" id="product" value="Other"/><span>Other</span></li>
								</ul>
							</div>

							<div id="wish-size">
								<label for="size"><h1 class="titles_create_wish">Size</h1></label>

								<ul class="">
									<li><input type="radio" name="size" id="size" value="XS"/>XS</li>
									<li><input type="radio" name="size" id="size" value="S"/>S</li>
									<li><input type="radio" name="size" id="size" value="M"/>M</li>
									<li><input type="radio" name="size" id="size" value="L"/>L</li>
									<li><input type="radio" name="size" id="size" value="XL"/>XL</li>
								</ul>
							</div>

							<div id="wish-description">
								<label for="description"><h1 class="titles_create_wish">Describe it a little bit more</h1></label>
								<input type="text" name="description" id="description" placeholder="Ex:ej. The brand is Rico and it’s packed in a yellow box."/>
							</div>

							<div id="wish-photo">
								<label for="photo"><h1 class="titles_create_wish">Upload some photos</h1></label>
								<input type="file" name="photo" id="photo" accept="image/*" placeholder="Upload your best photo"/>
							</div>

						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="button" name="next" class="next action-button" value="Next" />
					</fieldset>

					<fieldset id="third_step" class="grid_6_1200 grid_6_1024 grid_4_768 grid_6_320 push_2_1200">

						<div id="wish-course">
							<h1 class="titles_create_wish">Where’s the product going to?</h1>

							<div id="wish-destination">
								<input placeholder="From" type="text" class="datepicker"> 
								<input placeholder="To" type="text" class="datepicker"> 	
							</div>

							<div id="wish-final_date">
								<label for="date"><h2 class="">Delivery by</h2></label>
								<input type="checkbox" name="product" id="date" value="date"/>I don't have an specific date

							</div>

							<div id="wish-cost">
								<label for="cost"><h1 class="titles_create_wish">Aproximate cost of products</h1></label>
								<select class="select-jquery">
	                                <option>10</option>
	                                <option>20</option>
	                                <option>30</option>
	                                <option>40</option>
	                                <option>50</option>
	                                <option>60</option>
	                                <option>70 or more</option>
                            	</select>

                            	<select class="select-jquery">
	                                <option>$</option>
	                                <option>€</option>
	                                <option>£</option>
	                                <option>Other</option>
                            	</select>
							</div>

							<div id="wish-reward">
								<label for="reward"><h1 class="titles_create_wish">Tell is the reward</h1></label>
								<ul class="">
									<li><input type="radio" name="size" id="reward" value="Money"/><button>Money</button></li>
									<li><input type="radio" name="size" id="reward" value="Help"/><button>Help</button></li>
								</ul>
								<h4>IMPORTANT:Shipwish comisionates a 3% of the total cost of the transaction</h4>

								<select class="select-jquery">
	                                <option>10</option>
	                                <option>20</option>
	                                <option>30</option>
	                                <option>40</option>
	                                <option>50</option>
	                                <option>60</option>
	                                <option>70 or more</option>
                            	</select>
								<select class="select-jquery">
	                                <option>$</option>
	                                <option>€</option>
	                                <option>£</option>
	                                <option>Other</option>
                            	</select>
							</div>
						</div>
		
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="submit" name="submit" class="submit action-button" value="Preview & Publish" />
					</fieldset>
		</form>	

		</section>


	</div>
</div>

<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>