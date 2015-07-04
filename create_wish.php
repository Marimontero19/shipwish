<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<div class="main-container">

	<div class="container_12 container_10 container_8 container_6">

		<section class="create_wish">

			<form id="msform" class="grid_8_1200 grid_8_1024 grid_8_768 grid_6_320 push_2_1200 push_1_1024 push_0_768">
				<!-- progressbar -->
				<ul id="progressbar" class="grid_10_1200 grid_8_1024 grid_8_768 grid_6_320 push_1_1200 push_1_1024 push_0_768">
					<li class="active">Wish</li>
					<li>Details</li>
					<li>Delivery</li>
				</ul>
				<!-- fieldsets -->
					<fieldset id="first_step" class="grid_7_1200 grid_5_1024 grid_5_768 grid_6_320">
						<label for="wish"><h1 class="titles_create_wish">What do you crave for?</h1></label>
						<input type="text" name="wish" id="wish" placeholder="Ex:A basket of sweet plantains"/>
						<input type="button" id="first_button" name="next" class="form_button next-btn action-button" value="Next" />
						<div class="clear"></div>
					</fieldset>

					<fieldset id="second_step" class="grid_7_1200 grid_7_1024 grid_8_768 grid_6_320">
							
							<div id="wish-category">
								<label for="product"><h1 class="titles_create_wish">What’s the product about?</h1></label>
								<h3>Select all the categories that the items you want belong to.</h3>
								<h3>You can select as many as you need.</h3>
								<ul class="choose-category">
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="food" id="toggle-button" value="Food"/>
										<span><img src="img/icons/food.svg" alt="Food">Food</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="fashion" id="toggle-button" value="Fashion"/>
										<span><img src="img/icons/fashion.svg" alt="Fashion">Fashion</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="electronics" id="toggle-button" value="Electronics"/>
										<span><img src="img/icons/electronic.svg" alt="Electronics">Electronics</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="home" id="toggle-button" value="Home"/>
										<span><img src="img/icons/home.svg" alt="Home">Home</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="docs&books" id="toggle-button" value="Docs&Books"/>
										<span><img src="img/icons/books.svg" alt="Docs&Books">Books</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="Other" id="toggle-button" value="Other"/>
										<span><img src="img/icons/other.svg" alt="Other">Other</span>
									</label>
									</li>	

								</ul>
							</div>

							<div id="wish-size">
								<label for="size"><h1 class="titles_create_wish">Size</h1></label>
								<h3>Select the aproximate size of the items.</h3>

								<ul id="radio_button_size">
									<li>
										<label for="radio1"  role="button" title="The average of this is the size of a cell phone or keys.">
											<input type="radio" name="radio" id="radio1"  value="XS"/>
											<img src="img/icons/xs.svg" alt="XS">
										</label>
									</li>

									<li>
										<label for="radio2" role="button" title="The average of this is the size of a mug or glasses">
											<input type="radio" name="radio" id="radio2" value="S"/>
											<img src="img/icons/s.svg" alt="S">
										</label>
									</li>

									<li>
										<label for="radio3" role="button" title="The average of this is the size of a notebook or a tablet">
											<input type="radio" name="radio" id="radio3" value="M"/>
											<img src="img/icons/m.svg" alt="M">
										</label>
									</li>

									<li>
										<label for="radio4" role="button" title="The average of this is the size of a backpack.">
											<input type="radio" name="radio" id="radio4"  value="L"/>
											<img src="img/icons/l.svg" alt="L">
										</label>
									</li>

									<li>
										<label for="radio5" role="button" title="The average of this is the size of an elephant.">
											<input type="radio" name="radio" id="radio5" value="XL"/>
											<img src="img/icons/xl.svg" alt="XL">
										</label>
									</li>
								</ul>
							</div>

							<div id="wish-description">
								<label for="description"><h1 class="titles_create_wish">Describe it a little bit more</h1></label>
								<h3>The description is crucial for the traveler to understand what you want.</h3>
								<h3>It can also motivate a traveler to bring you the product ;)</h3>
								<textarea name="description" id="description" placeholder="Ex: The brand is Rico and it’s packed in a yellow box."></textarea>
							</div>

							<div id="wish-photo">
								<label for="photo"><h1 class="titles_create_wish">Upload some photos</h1></label>
								<h3>Pictures are the best option to make sure the traveller brings exactly what you want.</h3>
								<div class="upload-photo-box" id="dropzone">
									<span></span>								
									<h3>DRAG&DROP the files here</h3>
									<input type="file" name="photo" id="photo" accept="image/*" placeholder="Upload your best photo"/>
								</div>
								<h2>You can upload it later :)</h2>
							</div>
						

							<!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
							<input type="button" name="next" id="second_button" class="next-btn action-button" value="Next" />
						<div class="clear"></div>
					</fieldset>

					<fieldset id="third_step" class="grid_7_1200 grid_7_1024 grid_8_768 grid_6_320">					
						<div id="wish-course">
							<label for="product">
								<h1 class="titles_create_wish">Where’s the product going to?</h1>
							</label>
							<div id="wish-destination">
								<div class="mid-input">
									<label for="from"> <h1>From</h1></label>
									<input class="location-icon" placeholder="Country, city, state…" type="text"> 
								</div>
								<div class="mid-input">
									<label for="to"> <h1>To</h1> </label>
									<input class="location-icon" placeholder="City" type="text"> 
								</div>
								<div class="clear"></div>	
							</div>
							<div class="clear"></div>
							<div id="wish-final_date">
								<label for="date">
									<h1 class="">Delivery by</h1>
								</label>
								<div class="mid-input">
									<input class="date-icon datepicker" placeholder="Delivery date" type="text">
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
								<label for="reward"><h1 class="titles_create_wish">Tell us the reward</h1></label>
								<ul class="choose-reward">
									<li>
										<label>
											<input type="radio" name="size" id="reward" value="Money"/>
											<span> <img src="img/icons/money.svg">
												Money
											</span>
										</label>
									</li>
									<li>
										<label>
											<input type="radio" name="size" id="reward" value="Help"/>
											<span> <img src="img/icons/volunteer.svg">
												Help
											</span>
										</label>
									</li>									
								</ul>

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
                            	
                            	<h3> IMPORTANT:Shipwish comisionates a 3% of the total cost of the transaction</h3>

							</div>
							<div class="clear"></div>
						</div>
			
						<!--<input type="button" name="previous" class="previous action-button" value="Previous" />-->
						<input type="button" name="submit" onclick="location.href='product.php';" id="third_button" class="submit end-btn action-button" value="Publish" />
						<div class="clear"></div>
					</fieldset>
				<div class="clear"></div>
		</form>	
		<div class="clear"></div>
		</section>
		<script>
			var alturaPasoUno = $("#first_step").outerHeight() + $("#progressbar").outerHeight();
			/*
			var alturaPasoDos = $("#second_step").outerHeight(true) + $("#progressbar").outerHeight(true);
			var alturaPasoTres = $("#third_step").outerHeight(true) + $("#progressbar").outerHeight(true);
			*/

			$("footer.top").css("margin-top",alturaPasoUno+"px");
			/*
			$("#first_button").click(function(){
				$("footer.top").css('margin-top', alturaPasoDos+"px");
				});

			$("#second_button").click(function(){				
				$("footer.top").css("margin-top",alturaPasoTres+"px");
				});
			*/
		</script>

	</div>
</div>

<!-- FOOTER V2 -->


<footer class="top-two" style="background-color: #2C353A;">
    <div class="main-container">
        <div class="up container_12 container_10 container_8 container_6">
            <div class="questions grid grid_4_1200 grid_3_1024 grid_8_768 grid_6_320">
                <p>Any questions?</p>
                <h4><a href="">FAQ</a></h4>
                <h4><a href="">Help</a></h4>
                <div class="clear"></div>
            </div>
            <ul class="lan-cur grid_4_1200 grid_3_1024 grid_8_768 grid_6_320">
                <!--<li>Language</li>-->
                <li>
                    <select class="select-jquery">
                        <option>English</option>
                        <option>Spanish</option>
                        <option>French</option>
                    </select>
                </li>
                <!--<li style="padding-left: 45px;">Currency</li>-->
                <li>
                    <select class="select-jquery">
                        <option>EUR</option>
                        <option>USD</option>
                        <option>GBP</option>
                    </select>				     
                </li>
            </ul>
             <ul class="social grid_4_1200 grid_4_1024 grid_8_768 grid_6_320">
                 <li>
                     <a href=""><img src="img/icons/inst2.svg" alt="Instagram"></a>
                 </li>
                 <li>
                     <a href=""><img src="img/icons/googl2.svg" alt="Google+"></a>
                 </li>
                 <li>
                     <a href=""><img src="img/icons/tw2.svg" alt="Twitter"></a>
                </li>                         
                 <li>
                     <a href=""><img src="img/icons/fb2.svg" alt="facebook"></a>
                 </li>                         
                 <li>
                     Stay Tunned On
                 </li>                         
             </ul>
             <div class="clear"></div>
        </div>
    </div>
</footer>
<footer class="bottom">
    <div class="main-container">
        <div class="down container_12 container_10 container_8 container_6">
            <ul class="legal grid_7_1200 grid_5_1024 grid_8_768 grid_6_320">
                <li>
                    <a href="">About Shipwish</a>
                </li>
                <li>
                    <a href="">Legals</a>
                </li>
                <li>
                    <a href="">Terms & Conditions</a>
                </li>                        
            </ul>
            <span class="grid_5_1200 grid_5_1024 grid_8_768 grid_6_320">
                Copyright © Shipwish 2015. All rights & wrongs reserved.
            </span>
            <div class="clear"></div>
        </div>
    </div>
</footer>









