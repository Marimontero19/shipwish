<?php

$page = '| Negociation'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>
<body class="animsition">
<!-- USER INFO COLUMN -->
<div class="main-container">
	<div class="container_12 container_10 container_8 container_6">
        
        <!-- USER-GENERAL-INFO -->
        
        <?php

        include('includes/negociating.php');

        ?>

		<section id="negociation" >

            <div id="icon" class="grid_1_1200 grid_1_1024 grid_1_768 grid_1_320">
                <div class="title">
                        <span><img src="img/icons/chat.svg" alt="chat"></span>
                </div>
            </div>

            <div id="chat" class="grid_6_1200 grid_6_1024 grid_7_768 grid_6_320">
                <div class="title">
                    <h2>Chat with August Sabadini</h2>
                </div>
                <div id="negociation-description">
                    <h3>Start negociation</h3>
                    <h4>Change the terms what you want to negociate with the wisher.
                    Leave blank the ones you agree with.</h4>
                </div>
                
                    <form id="negociation-form" action"#">

                        <fieldset>
                        
                            <label for=""><h4>Delivery date</h4></label>
                                <input class="datepicker date" placeholder="DD/MM/YY" type="text">
                                <img class="ui-datepicker-trigger" src="img/icons/calendar.svg" alt="Select date" title="Select date">

                            <label for=""><h4>Reward</h4></label>
                            <p>There are different ways to reward your business. Be sure to make it clear for your future co-partner.</p>
                            
                            <div id="choose-reward">
                                <label class="white"><input type="radio" id="money-radio" name="toogle" value="money" name="toogle"><span><img src="img/icons/money.svg" alt="money">Money</span></label>

                                <label class="white"><input type="radio" id="volunteer-radio" name="toogle" value="volunteer" name="toogle"><span><img src="img/icons/volunteer.svg" alt="money">Volunteer</span></label>

                                <div><div id="choose-volunteer" class="spoiler">
                                            <p>Here are some ideas of volunteer activities you can offer to the traveler.You can also suggest your own!</p>
                                           
                                           <ul class="volunteer-options">
                                                <li>
                                                    <label class="white"><input type="radio" name="toogle" value="money" name="toogle"><span><img src="img/icons/car2.svg" alt="Ride"></span></label>
                                                    <h5 class="volunteer-titles">Ride</h5>
                                                </li>            
                                                <li>
                                                    <label class="white"><input type="radio" name="toogle" value="money" name="toogle"><span><img src="img/icons/tour.svg" alt="Tour"></span></label>
                                                    <h5 class="volunteer-titles">City Tips</h5>
                                                </li>
                                                <li>
                                                    <label class="white"><input type="radio" name="toogle" value="money" name="toogle"><span><img src="img/icons/localproduct.svg" alt="Local product"></span></label>
                                                    <h5 class="volunteer-titles">Product</h5>
                                                </li>
                                                <li>
                                                    <label class="white"><input type="radio" name="toogle" value="money" name="toogle"><span><img src="img/icons/meal.svg" alt="Meal"></span></label>
                                                    <h5 class="volunteer-titles">Meal</h5>
                                                </li>
                                                <li>
                                                    <label class="white"><input type="radio" name="toogle" value="money" name="toogle"><span><img src="img/icons/myown.svg" alt="My own"></span></label>
                                                     <h5 class="volunteer-titles">My own</h5>
                                                </li>
                                            </ul>

                                            <textarea style="margin-top:20px;" name="volunteer-description" id="volunteer-description" placeholder="Ex: A guided tour to the nicest places of the city during 3 hours."></textarea>
                                        </div>

                                      
                                    </div>
                                </div>

                            <div class="clear"></div> 
                            <div id="costs-currency">

                                <ul class="conditions">
                                    <li>
                                        <label for="cost-product">Cost of product</label>
                                    </li>
                                    <li>
                                        <select name="cost-product" id="cost-product">
                                            <option value="5" selected="selected">5</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select> 
                                    </li>

                                    <li>
                                        <select name="currency-product" id="currency-product">
                                            <option value="EUR" selected="selected">EUR</option>
                                            <option value="USD">USD</option>
                                            <option value="GBP">GBP</option>
                                        </select> 
                                    </li>  
                                </ul>

                            <ul class="conditions-2">
                                    <li>
                                        <label for="money-reward">Rewards</label>
                                    </li>

                                    <li>
                                        <select name="money-reward" id="money-reward">
                                            <option selected="selected" value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select> 
                                    </li>  

                                    <li>
                                        <select name="currency-reward" id="currency-reward">
                                            <option selected="selected" value="EUR">EUR</option>
                                            <option value="USD">USD</option>
                                            <option value="GBP">GBP</option>
                                        </select> 
                                    </li>  
                                </ul>
                            </div>
                        
                        <button class="send"><!--<input type="submit">-->
                            <a href="product-negociation-2.php">Send Proposal</a>
                        </button>
                        
                        <br>    

                       <!--<input type="submit">-->
                        <a href="#small-dialog" target="" class="log-in-btn popup-with-move-anim">
                                Prueba
                            </a>
                        

                        </fieldset>
                    </form>
                </div>
        </section>
    </div>
</div>

    <!-- POPUP  -->
    
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
        <h1>Woot! You’re almost there.</h1>
        <h4>Just make an account and<br> get your wish posted.</h4>
        <input type="text" placeholder="Full Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        
        <input type="checkbox" name="vehicle" value="Bike">
        <label>I accept the Terms and Conditions</label>

        <input type="submit" value="Sign Up">

        <hr>

        <h5>or Sign up with</h5>
        <div class="social-sign">
            <a href="#" class=" fb-btn">Facebook</a>
            <a href="#" class=" gp-btn">Google +</a>
        </div>
    
    </div>


<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



