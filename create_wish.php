<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


<div class="main-container" style="background-color: #ffffff">

	<div class="container_12 container_10 container_8 container_6">

		<section class="create_wish">

			<form id="msform" class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">
				<!-- progressbar -->
				<ul id="progressbar" class="grid_8_1200 grid_8_1024 grid_6_768 grid_5_320 push_2_1200 push_1_1024 push_1_768">
					<li class="active">Wish</li>
					<li>Details</li>
					<li>Delivery</li>
				</ul>
				<!-- fieldsets -->
					<fieldset id="first_step" class="grid_4_1200 grid_4_1024 grid_4_768 grid_5_320">
						<label for="wish"><h1 class="titles_create_wish">What do you crave for?</h1></label>
						<input type="text" name="wish" id="wish" placeholder="Ex:A basket of sweet plantains"/>
						<input type="button" name="next" class="form_button next action-button" value="Next" />
						<div class="clear"></div>
					</fieldset>

					<fieldset id="second_step" class="grid_8_1200 grid_6_1024 grid_4_768 grid_6_320">
							
							<div id="wish-category">
								<label for="product"><h1 class="titles_create_wish">What’s the product about?</h1></label>
								
								<ul class="choose-category">
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="food" id="toggle-button" value="Food"/>
										<span><img src="img/icons/questionmark-white.svg" alt="Food">Food</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="fashion" id="toggle-button" value="Fashion"/>
										<span><img src="img/icons/questionmark-white.svg" alt="Fashion">Fashion</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="electronics" id="toggle-button" value="Electronics"/>
										<span><img src="img/icons/questionmark-white.svg" alt="Electronics">Electronics</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="home" id="toggle-button" value="Home"/>
										<span><img src="img/icons/questionmark-white.svg" alt="Home">Home</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="docs&books" id="toggle-button" value="Docs&Books"/>
										<span><img src="img/icons/questionmark-white.svg" alt="Docs&Books">Documents</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="Other" id="toggle-button" value="Other"/>
										<span><img src="img/icons/questionmark-white.svg" alt="Other">Other</span>
									</label>
									</li>	

								</ul>
							</div>

							<div id="wish-size">
								<label for="size"><h1 class="titles_create_wish">Size</h1></label>

								<ul id="radio_button_size">
									<li>
										<label for="radio1"  role="button">
											<input type="radio" name="radio" id="radio1"  value="XS"/>
											<img src="img/icons/xs.svg" alt="XS">
										</label>
									</li>

									<li>
										<label for="radio2" role="button">
											<input type="radio" name="radio" id="radio2" value="S"/>
											<img src="img/icons/s.svg" alt="S">
										</label>
									</li>

									<li>
										<label for="radio3" role="button">
											<input type="radio" name="radio" id="radio3" value="M"/>
											<img src="img/icons/m.svg" alt="M">
										</label>
									</li>

									<li>
										<label for="radio4" role="button">
											<input type="radio" name="radio" id="radio4"  value="L"/>
											<img src="img/icons/l.svg" alt="L">
										</label>
									</li>

									<li>
										<label for="radio5" role="button">
											<input type="radio" name="radio" id="radio5" value="XL"/>
											<img src="img/icons/xl.svg" alt="XL">
										</label>
									</li>
								</ul>
							</div>

							<div id="wish-description">
								<label for="description"><h1 class="titles_create_wish">Describe it a little bit more</h1></label>
								<textarea name="description" id="description" placeholder="Ex: The brand is Rico and it’s packed in a yellow box."></textarea>
							</div>

							<div id="wish-photo">
								<label for="photo"><h1 class="titles_create_wish">Upload some photos</h1></label>
								<div class="upload-photo-box">
									<h3>Drag and drop</h3>
									<span></span>
									<input type="file" name="photo" id="photo" accept="image/*" placeholder="Upload your best photo"/>
								</div>
								<h2>You can upload it later :)</h2>
							</div>
						

							<input type="button" name="previous" class="previous action-button" value="Previous" />
							<input type="button" name="next" class="next action-button" value="Next" />
						<div class="clear"></div>
					</fieldset>

					<fieldset id="third_step" class="grid_6_1200 grid_6_1024 grid_4_768 grid_6_320">					
						<div id="wish-course">
							<label for="product">
								<h1 class="titles_create_wish">Where’s the product going to?</h1>
							</label>
							<div id="wish-destination">
								<div class="mid-input">
									<label for="from"> <h1>From</h1></label>
									<input placeholder="From" type="text"> 
								</div>
								<div class="mid-input">
									<label for="to"> <h1>To</h1> </label>
									<input placeholder="To" type="text"> 
								</div>
								<div class="clear"></div>	
							</div>
							<div class="clear"></div>
							<div id="wish-final_date">
								<label for="date">
									<h1 class="">Delivery by</h1>
								</label>
								<div class="mid-input">
									<input placeholder="Delivery date" type="text" class="datepicker">
								</div>
								<div class="mid-input">
									<input type="checkbox" name="product" id="date" value="date"/>
									<label class="no-date">I don't have an specific date</label>
								</div>
								<div class="clear"></div>
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
                            	<div class="clear"></div>
							</div>

							<div id="wish-reward">
								<label for="reward"><h1 class="titles_create_wish">Tell is the reward</h1></label>
								<ul class="choose-reward">
									<li>
										<label>
											<input type="radio" name="size" id="reward" value="Money"/>
											<span> <img src="img/icons/questionmark-white.svg">
												Money
											</span>
										</label>
									</li>
									<li>
										<label>
											<input type="radio" name="size" id="reward" value="Help"/>
											<span> <img src="img/icons/questionmark-white.svg">
												Help
											</span>
										</label>
									</li>									
								</ul>
								<textarea name="description" id="description" placeholder="What will it be?"></textarea>
								
								<!--
								<h4>IMPORTANT:Shipwish comisionates a 3% of the total cost of the transaction</h4>

								<select class="">
	                                <option>10</option>
	                                <option>20</option>
	                                <option>30</option>
	                                <option>40</option>
	                                <option>50</option>
	                                <option>60</option>
	                                <option>70 or more</option>
                            	</select>
								<select class="">
	                                <option>$</option>
	                                <option>€</option>
	                                <option>£</option>
	                                <option>Other</option>
                            	</select>
                            	<div class="clear"></div>
                            	-->
							</div>
							<div class="clear"></div>
						</div>
			
						<input type="button" name="previous" class="previous action-button" value="Previous" />
						<input type="button" name="submit" class="submit next action-button" value="Next" />
						<div class="clear"></div>
					</fieldset>
				<div class="clear"></div>
		</form>	
		<div class="clear"></div>
		</section>


	</div>
</div>




