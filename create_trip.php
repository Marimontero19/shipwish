<?php

$page = '| Create a trip'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<body
class="animsition"
data-animsition-in="fade-in-down"
data-animsition-in-duration="300">
<div class="main-container">

	<div class="container_12 container_10 container_8 container_6">

		<section class="create_wish">

			<form id="mform" class="grid_8_1200 grid_8_1024 grid_8_768 grid_6_320 push_2_1200 push_1_1024 push_0_768">
						<!-- 1 -->
						<div id="wish-course">
							<label for="product">
								<h1 class="titles_create_wish">Yeah, you're going on a trip! Where are you going to?</h1>
							</label>
							<div id="wish-destination">
								<div class="mid-input">
									<label for="from"> <h1>From</h1></label>
									<input class="place-icon" placeholder="Country, city, state…" type="text"> 
								</div>
								<div class="mid-input">
									<label for="to"> <h1>To</h1> </label>
									<input class="place-icon" placeholder="City" type="text"> 
								</div>
								<div class="clear"></div>	
							</div>
							<div class="clear"></div>
							<div id="wish-final_date">
								<label for="date">
									<h1 class="">When are you arriving to your destination?</h1>
								</label>
								<input style="  width: 40%;" class="date-icon datepicker" placeholder="Delivery date" type="text">
								<div class="clear"></div>
							</div>
							<!-- 2 -->
							<div id="wish-size">
								<label for="size"><h1 class="titles_create_wish">How big can be the items?</h1></label>
								<h3>Select the aproximate size of the items you can deliver.</h3>

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
							<!-- 3 -->
							<div id="wish-category">
								<label for="product"><h1 class="titles_create_wish">How are you traveling?</h1></label>
								<h3>The wisher can understand which kind of items you'll be able to bring.</h3>
								<ul class="choose-category">
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="car" id="toggle-button" value="Car"/>
										<span><img src="img/icons/car.svg" alt="Car">Car</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="bus" id="toggle-button" value="Bus"/>
										<span><img src="img/icons/bus.svg" alt="Bus">Bus</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="camper" id="toggle-button" value="Camper"/>
										<span><img src="img/icons/camper.svg" alt="Camper">Camper</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="moto" id="toggle-button" value="Moto"/>
										<span><img src="img/icons/moto.svg" alt="Moto">Moto</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="plane" id="toggle-button" value="Plane"/>
										<span><img src="img/icons/plane.svg" alt="Plane">Plane</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="helicopter" id="toggle-button" value="Helicopter"/>
										<span><img src="img/icons/helicopter.svg" alt="Helicopter">Helicopter</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="train" id="toggle-button" value="Train"/>
										<span><img src="img/icons/train.svg" alt="Train">Train</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="boat" id="toggle-button" value="Boat"/>
										<span><img src="img/icons/boat.svg" alt="Boat">Boat</span>
									</label>
									</li>
									<li>
									<label for="toggle-button">
										<input type="checkbox" class="checkbox" name="other" id="toggle-button" value="Other"/>
										<span><img src="img/icons/rocket.svg" alt="Other">Other</span>
									</label>
									</li>										

								</ul>
							</div>
							<!-- 4 -->
							<div id="wish-description" style="margin: 80px 0 !important;">
								<label for="description"><h1 class="titles_create_wish">About the trip</h1></label>
								<h3>You can tell the wisher the purpose of the trip and what makes you the perfect traveller.</h3>
								<h3>This is opcional, but it's an opportunity to be more likeable.</h3>
								<textarea name="description" id="description" placeholder="I’m a person that in travelling finds…"></textarea>
							</div>

						<!--<input type="button" name="previous" class="previous action-button" value="Previous" />-->
						<input type="button" name="submit" onclick="location.href='trip_board.php';" class="submit end-btn action-button" value="Publish" />
						<div class="clear"></div>
		</form>	
		<div class="clear"></div>
		</section>

	</div>
</div>

<!-- FOOTER V2 -->
</body>

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









