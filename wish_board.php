<?php

$page = 'wish_board'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<!--
<hr class="full-width-line">
<hr class="full-width-line2">
-->
        <div id="header_wishboard">
            <div class="main-container">
                <div id="wish_trips">
                    <a href="#" alt="Wish Board">Wish Board</a> |
                    <a href="trip_board.php" alt="Trips Board">Trips Board</a>
                </div>

                <div id="user-search">
                     <form method="" action="">
                          <input type="text" name="from" placeholder="From" value="" class="input-trips">
                          <input type="text" name="to" placeholder="To" value="" class="input-trips">

                          <input type="submit" name="search" class="button search" value="Search" class="button">

                           <button class="outline"><a href="create_trip.php" alt="Create Trip">Create Wish</a></button>
                    </form>
                </div>

                <div id="filters">

                        <select id="filter_date" class="">
                            <label><input type="text" class="datepicker"></label>    
                        </select> 


                        <select id="filter_category" class="">
                            <option value="*">All</option>
                            <option value=".food/beverage">Food/Beverage</option>
                            <option value=".electronics">Electronics</option>
                            <option value=".fashion">Fashion</option>
                            <option value=".home/garden">Home/Garden</option>        
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


                      <input class="" type="submit" name="search" class="button search" value="Clear filters">
                </div>
        </div>

<div class="main-container">
    <div class="container_12 container_10 container_8 container_6">

        <div id="wish-description" class="grid_8_1200 grid_8_1024 grid_6_768 grid_6_320 push_2_1200 push_1_1024">
                <img src="img/icons/wish_board.svg" alt="wishes">
                <div class="text-description">
                    <h4>Here are the cards with the items that will make people happy. 
They are looking for a traveler to make their wish come true.</h4>
                    <h3>Are you going to be the one delivering the wish?</h3>
                </div>

        </div>

        <div id="wish-boards">
            <!--1-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_1_xs.jpg" alt="user_1">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Pecorino Romano Cheese</h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>Italy</h4>
                            <br>
                            <p>To:</p><h4>Dublin</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
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
            </div>
            <!--2-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_2_xs.jpg" alt="user_2">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Lemon Drizzle</h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>England</h4>
                            <br>
                            <p>To:</p><h4>Madrid</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
                            <p>Delivery:</p><h4>July 20th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food"></li>
                                <li><img src="img/icons/volunteer.svg" class="icon-circle" alt="volunteer"></li>
                                <li><img src="img/icons/s.svg" class="icon-circle" alt="s"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>
            </div>
            <!--3-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_3_xs.jpg" alt="user_3">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Shoes from Harajuku store</h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>Tokio</h4>
                            <br>
                            <p>To:</p><h4>Milano</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
                            <p>Delivery:</p><h4>July 30th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/fashion.svg" class="icon-circle" alt="fashion"></li>
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
            </div>
            <!--4-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_4_xs.jpg" alt="user_4">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Head Medicine pills</h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>Madrid</h4>
                            <br>
                            <p>To:</p><h4>Miami</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
                            <p>Delivery:</p><h4>Nov. 30th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/other.svg" class="icon-circle" alt="other"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money"></li>
                                <li><img src="img/icons/xs.svg" class="icon-circle" alt="Xs"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                    <h4>Let's take a look</h4>
                </div>
            </div>
            <!--5-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_5_xs.jpg" alt="user_5">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Lakeland's Chef's Knife </h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>India</h4>
                            <br>
                            <p>To:</p><h4>Italy</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
                            <p>Delivery:</p><h4>Oct. 2th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/other.svg" class="icon-circle" alt="other"></li>
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
            </div>
            <!--6-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_6_xs.jpg" alt="user_6">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Leather jacket</h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>Argentina</h4>
                            <br>
                            <p>To:</p><h4>Bilbao</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
                            <p>Delivery:</p><h4>June 9th, 2015</h4>
                            <ul>
                                <li><img src="img/icons/fashion.svg" class="icon-circle" alt="fashion"></li>
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
            </div>
            <!--7-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_7_xs.jpg" alt="user_7">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Beans of Costa Rica</h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>Liberia</h4>
                            <br>
                            <p>To:</p><h4>Roma</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
                            <p>Delivery:</p><h4>May 1th, 2016</h4>
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
            </div>
            <!--8-->
            <div class="card grid_5_1200 grid_5_1024 grid_4_768 grid_6_320 push_1_1200">
                <div class="wisher_card_container">
                    <div id="basic_info_home">
                        <ul>
                            <li>
                                <a href="user_profile.php">
                                    <img class="user-pic" src="img/users_pic/user_8_xs.jpg" alt="user_8">
                                </a>
                            </li>
                            <li>
                                <h3 class="">Crack seeds</h3>
                            </li>
                            <!--<li><p>*3</p></li>-->
                        </ul>					
                    </div>

                    <div class="display_block">

                        <div id="destination_home" class="margin-left">
                            <p>From:</p><h4>Hawai</h4>
                            <br>
                            <p>To:</p><h4>Beijing</h4>
                        </div>

                        <div id="details_home" class="short-delivery-date">
                            <p>Delivery:</p><h4>July 20th, 2015</h4>
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
            </div>	
           

            <!--FINAL DE WISHES-->

            <div class="center grid_12_1200">
                <a href=""><img src="img/icons/more.svg" alt="view more"></a>
             </div>

        </div>
    </div>
</div>

<!--Footer-->
<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>





	












