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
                                <li></li>
                                <li></li>
                                <li></li>
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
                                <li></li>
                                <li></li>
                                <li></li>
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
                                <li></li>
                                <li></li>
                                <li></li>
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
                                <li></li>
                                <li></li>
                                <li></li>
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
                                <li></li>
                                <li></li>
                                <li></li>
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
                                <li></li>
                                <li></li>
                                <li></li>
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
                                <li></li>
                                <li></li>
                                <li></li>
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
                                <li></li>
                                <li></li>
                                <li></li>
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
                <button><a href="create_trip.php" alt="Create Trip">See more wishes</a></button>
             </div>

        </div>
    </div>
</div>

<!--Footer-->
<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>





	












