<?php

$page = '| Profile Private'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<!-- USER INFO COLUMN -->
<div class="main-container">
	<div class="container_12 container_10 container_8 container_6">
        
        <!-- USER-GENERAL-INFO -->
        
        <?php

        include('includes/user-general-info.php');

        ?>

		<!-- USER COMPLEMENTARY COLUMN -->
		<section id="user-detail-info" class="grid_7_1200 push_1_1200 grid_6_1024 push_1_1024 grid_8_768 push_0_768 grid_6_320 push_0_320">
			<!-- upcoming wishes -->
			<div class="upcoming-wishes">
				<div class="title">
					<span><img src="img/icons/wishes.svg" alt="wishes"></span>
					<h2>5 | Upcoming wishes</h2>
				</div>
				<!-- backward/forward
				<div class="backward-forward">
					<span class="bw"></span>
					<span class="fw"></span>
				</div>
				-->
                <!-- create wish card-->
                <a class="create_card create_wish_card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320" href="create_wish.php">
                    <div class="absolute-center">
                        <div class="add-icon"></div>
                        <h3>Add wish</h3>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </a>

                
            <!--Primer wish-->
            <a href="#" class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">

                <div class="number">
                    3
                </div>
                
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <!-- <li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li> -->
                            <li><h3 class="">Pecorino Romano Cheese</h3></li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home">
                            <p>From:</p><h4>Italy</h4>
                            <br>
                            <p>To:</p><h4>Dublin</h4>
                        </div>

                        <div id="details_home">
                            <p>Delivery:</p><h4>June 7th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>

            </a>
               
               
            <!--Segundo wish-->
            <a href="#" class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">

                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <!-- <li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li> -->
                            <li><h3 class="">Blue jacket, shoes ans socks</h3></li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home">
                            <p>From:</p><h4>London</h4>
                            <br>
                            <p>To:</p><h4>Dublin</h4>
                        </div>

                        <div id="details_home">
                            <p>Delivery:</p><h4>July 30th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/fashion.svg" class="icon-circle" alt="fashion"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money"></li>
                                <li><img src="img/icons/l.svg" class="icon-circle" alt="large"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>

            </a>
               
            <!--Tercer wish-->
            <a href="#" class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">

                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <!-- <li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li> -->
                            <li><h3 class="">Olive oil and spanish bread</h3></li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home">
                            <p>From:</p><h4>Madrid</h4>
                            <br>
                            <p>To:</p><h4>Dublin</h4>
                        </div>

                        <div id="details_home">
                            <p>Delivery:</p><h4>Agos. 2th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>

            </a>

            <!--Cuarto wish-->
            <!--<a href="#" class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">

                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                             <li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li> 
                            <li><h3 class="">Special cake May Flower Fest</h3></li>
                            <li><p>*3</p></li>
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home">
                            <p>From:</p><h4>Girona</h4>
                            <br>
                            <p>To:</p><h4>Dublin</h4>
                        </div>

                        <div id="details_home">
                            <p>Delivery:</p><h4>May 30th, 2016</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food"></li>
                                <li><img src="img/icons/volunteer.svg" class="icon-circle" alt="volunteer"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>

            </a>-->
               
            <!--Quinto wish-->
           <!-- <a href="#" class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">

                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li><a href="user_profile.php"><img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1"></a></li> 
                            <li><h3 class="">Parmesano Romano Cheese</h3></li>
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home">
                            <p>From:</p><h4>Italy</h4>
                            <br>
                            <p>To:</p><h4>Dublin</h4>
                        </div>

                        <div id="details_home">
                            <p>Delivery:</p><h4>June 7th, 2016</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food"></li>
                                <li><img src="img/icons/volunteer.svg" class="icon-circle" alt="volunteer"></li>
                                <li><img src="img/icons/s.svg" class="icon-circle" alt="small"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>

            </a>-->
                
                
                
                
            <div class="clear"></div>    
			</div>
			<!-- upcoming trips -->
			<div class="upcoming-trips">
				<div class="title">
					<span><img src="img/icons/trips.svg" alt="trips"></span>
					<h2>2 | Upcoming trips</h2>
				</div>
				<!-- backward/forward
				<div class="backward-forward">
					<span class="bw"></span>
					<span class="fw"></span>
				</div>
				-->
            <!-- create trip card-->
            <a class="create_card create_trip_card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320" href="#">
                <div class="absolute-center" style="height:75%;">
                    <div class="add-icon"></div>
                    <h3>Add trip</h3>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </a>
				
				
				
            <!--Primer trip-->
            <a href="product_profile.php" class="card grid_6_1200 grid_5_1024 grid_4_768 grid_6_320">

                <div class="wisher_card_container">
                    <div class="display_block">
                        <div id="destination_home">
                            <p>From:</p><h4>Dublin</h4>
                            <br>
                            <p>To:</p><h4>London</h4>
                        </div>

                        <div id="details_home">
                            <p>Delivery:</p><h4>July 20th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/plane.svg" alt="plane"></li>
                                <li><img src="img/icons/m.svg"  alt="medium"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>

            </a>
					
            <div class="clear"></div>				
			</div>
			<!-- reviews -->
			<div class="upcoming-trips">
				<div class="title">
					<span><img src="img/icons/comments.svg" alt="comments"></span>
					<h2>23 | Reviews</h2>
				</div>
				<!-- backward/forward
				<div class="backward-forward">
					<span class="bw"></span>
					<span class="fw"></span>
				</div>
				-->
				<!-- user-reviews -->
				<!-- 1 -->
				<div class="review">
					<!-- user picture -->
                    <div>
                        <a href="user-profile"><img src="img/users_pic/user_18_xs.jpg" alt="user-18-s" class="user-pic-review"></a>
                    </div>
					<!-- name -->
					<h3>
						Kimberly Ray
					</h3>			
					<!-- rating -->
					<div class="rating-review">
						<p>Rating</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<!-- description -->
					<p class="description-review">
						I was impressed with the efficient manner in which I received my luggage set. Additionally, the price for this set was more than reasonable.
					</p>
                    <!-- date -->
					<div class="review-date">
						31/July/2015
					</div>
					<div class="clear"></div>		
				</div>
				<!-- 2 -->
				<div class="review">
					<!-- user picture -->
                    <div>
                        <a href="user-profile"><img src="img/users_pic/user_11_s.jpg" alt="user_11_s" class="user-pic-review"></a>
                    </div>
					<!-- name -->
					<h3>
						Bobby Coleman
					</h3>			
					<!-- rating -->
					<div class="rating-review">
						<p>Rating</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<!-- description -->
					<p class="description-review">
						The price was great, the shipping was fast and it held up very well on our trip to Jamaica and back. 
					</p>
					<!-- date -->
					<div class="review-date">
						10/May/2015
					</div>	
					<div class="clear"></div>						
				</div>
				<!-- 3 -->
				<div class="review">
					<!-- user picture -->
                    <div>
                        <a href="user-profile"><img src="img/users_pic/user_12_s.jpg" alt="user-11-s" class="user-pic-review"></a>
                    </div>
					<!-- name -->
					<h3>
						Jinna Chu
					</h3>			
					<!-- rating -->
					<div class="rating-review">
						<p>Rating</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<!-- description -->
					<p class="description-review">
						Great business, very puntual.
					</p>
					<!-- date -->
					<div class="review-date">
						10/Oct./2014
					</div>
					<div class="clear"></div>						
				</div>
				<!-- 4 -->
				<div class="review">
					<!-- user picture -->
                    <div>
                        <a href="user-profile"><img src="img/users_pic/user_13_s.jpg" alt="user_13_s" class="user-pic-review"></a>
                    </div>
					<!-- name -->
					<h3>
						Diana Johnston
					</h3>			
					<!-- rating -->
					<div class="rating-review">
						<p>Rating</p>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<!-- description -->
					<p class="description-review">
                        Nice job. 
					</p>
					<!-- date -->
					<div class="review-date">
						05/Agos./2014
					</div>
					<div class="clear"></div>						
				</div>									
			</div>
			<div class="clear"></div>
		</section>

	</div>
</div>



<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



