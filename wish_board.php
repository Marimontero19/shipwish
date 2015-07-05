<?php

$page = '| Wishes'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<!--
<hr class="full-width-line">
<hr class="full-width-line2">
-->
    <body class="animsition">
        <div id="header_wishboard">
            <div class="main-container" >
                <div id="wish_trips">
                    <ul>
                         <li>
                             <button><img src="img/icons/more2.svg" alt="more">
                            <a href="create_wish.php" class="animsition-link" data-animsition-out="fade-out-up" data-animsition-out-duration="300" alt="Create Trip">New wish</a></button>
                        </li>

                        <li>
                            <img src="img/icons/wishes.svg" alt="Wishes">
                            <a href="#" alt="Wishes">Wishes</a>
                        </li>

                          <li>
                            <img src="img/icons/trips.svg" alt="trips">
                            <a href="trip_board.php" alt="Trips">Trips</a>
                        </li>
                    </ul>
                </div>
                <div class="triangle-down">
                </div>
            </div>
        </div>

        <div id="header-search">
            <div class="main-container">
              <div  class="container_12 container_10 container_8 container_6 ">
                <div class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">
                     
                     <div id="user-search" >

                        <h4>What are you willing to bring?</h4>

                         <form method="" action="">

                            <div class="grid_10_1200 grid_10_1024 grid_8_768 grid_6_320 push_1_1200">
                                  <input type="text" name="from" placeholder="From" value="" class="input-trips">
                                  <img src="img/icons/estela.svg" alt="Shipwish" class="stella">
                                  <input type="text" name="to" placeholder="To" value="" class="input-trips">
                                  <!--<input type="submit" name="search" value="" class="">-->
                                  <img src="img/icons/search.svg" alt="Shipwish">
                           
            <!--inicio filtros -->  

                                <div class="divspoiler">
                                    <img src="img/icons/filters.svg" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}" />
                                </div><div><div class="spoiler" style="display: none;">
                             
                                    <div id="filters">

                                        <input class="datepicker board_date" placeholder="Date">


                                        <select id="filter_details">
                                            <option value="*" selected="selected">Category</option>
                                            <option value=".food" class="food">Food</option>
                                            <option value=".electronics">Electronics</option>
                                            <option value=".fashion">Fashion</option>
                                            <option value=".home/garden">Home</option>        
                                        </select> 

                                        <select id="filter_details">
                                            <option value="*"  selected="selected">Size</option>
                                            <option value=".xs">XS</option>
                                            <option value=".s">S</option>
                                            <option value=".m">M</option>
                                            <option value=".l">L</option>  
                                            <option value=".xl">XL</option> 
                                        </select> 

                                        <select id="filter_details">
                                            <option value="*" selected="selected">Reward</option>
                                            <option value=".money">Money</option>
                                            <option value=".volunteer">Volunteer</option>
                                        </select> 
                                        
                                         <input type="reset" value="Clear filters" class="clear_filter" />
                                    </div>
                                </div></div>
                            <!--final filtros -->  
                                </div>
                        </form>

                    </div>
                </div>
                <div class="clear"></div>
        </div>
    </div>
</div>

<div class="main-container" style="background-color:#f9f9f9">
    <div class="container_12 container_10 container_8 container_6">

        <div id="wish-description-home" class="grid_8_1200 grid_8_1024 grid_6_768 grid_6_320 push_2_1200 push_1_1024">
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
                                <a href="product.php">
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
                            <p>Delivery:</p><h4>June 7th</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food" title="Food"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money" title="Money"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>	
                </div>	

                <div class="button_look">
                   <a href="product.php"> <h4>Let's take a look</h4></a>
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
                            <p>Delivery:</p><h4>July 20th</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food" title="Food"></li>
                                <li><img src="img/icons/volunteer.svg" class="icon-circle" alt="volunteer" title="Volunteer"></li>
                                <li><img src="img/icons/s.svg" class="icon-circle" alt="s"title="The average of this is the size of a mug or glasses" ></li>
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
                                <h3 class="">COLAB Dry Shampoo</h3>
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
                            <p>Delivery:</p><h4>July 30th</h4>
                            <ul>
                                <li><img src="img/icons/fashion.svg" class="icon-circle" alt="fashion"  title="Fashion"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money" title="Money"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
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
                            <p>Delivery:</p><h4>Nov. 30th</h4>
                            <ul>
                                <li><img src="img/icons/other.svg" class="icon-circle" alt="other" title="Other"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money" title="Money"></li>
                                <li><img src="img/icons/xs.svg" class="icon-circle" alt="xs" title="The average of this is the size of a cell phone or keys."></li>
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
                            <p>Delivery:</p><h4>Oct. 2th</h4>
                            <ul>
                                <li><img src="img/icons/other.svg" class="icon-circle" alt="other" title="Other"></li>
                                <li><img src="img/icons/volunteer.svg" class="icon-circle" alt="volunteer" title="Volunteer"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
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
                            <p>Delivery:</p><h4>June 9th</h4>
                            <ul>
                                <li><img src="img/icons/fashion.svg" class="icon-circle" alt="fashion" title="Fashion"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money" title="Money"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
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
                            <p>Delivery:</p><h4>May 1th</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food" title="Food"></li>
                                <li><img src="img/icons/money.svg" class="icon-circle" alt="money" title="Money"></li>
                                <li><img src="img/icons/m.svg" class="icon-circle" alt="medium" title="The average of this is the size of a notebook or a tablet"></li>
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
                            <p>Delivery:</p><h4>July 20th</h4>
                            <ul>
                                <li><img src="img/icons/food.svg" class="icon-circle" alt="food"  title="Food"></li>
                                <li><img src="img/icons/volunteer.svg" class="icon-circle" alt="volunteer" title="Volunteer"></li>
                                <li><img src="img/icons/s.svg" class="icon-circle" alt="small" title="The average of this is the size of a mug or glasses"></li>
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
                <a href=""><img src="img/icons/more.svg" alt="view more" style="margin-bottom:60px"></a>
             </div>

        </div>
    </div>
</div>

<!--Footer-->
<?php

$page = 'product'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>





	












