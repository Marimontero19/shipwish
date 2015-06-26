<?php

$page = '| Negociation'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

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
                
                    <form id="negociation-form">
                        
                        <label for=""><h4>Delivery date</h4></label>
                        <input class="date_picker date" id="date-icon" placeholder="DD/MM/YY" type="text">

                        <label for=""><h4>Reward</h4></label>
                        <p>There are different ways to reward your business. Be sure to make it clear for your future co-partner.</p>
                        
                        <div id="choose-reward">
                            <label class="white"><input type="radio" name="toogle" value="money" name="toogle"><span><img src="img/icons/money.svg" alt="money">Money</span></label>
                            <label class="white"><input type="radio" name="toogle" value="volunteer" name="toogle"><span><img src="img/icons/volunteer.svg" alt="volunteer">Volunteer</span></label>
                        </div>

                        <div class="clear"></div>

                      
                            <ul class="conditions">
                                <li><label for="money-product">Cost of product</label></li>
                                <li>
                                    <select class="select-jquery-color">
                                        <option>5</option>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                        <option>50</option>
                                    </select> 
                                </li>  
                                 <li>
                                    <label for="currency-product"></label>
                                    <select class="select-jquery-color">
                                        <option>EUR</option>
                                        <option>USD</option>
                                        <option>GBP</option>
                                    </select> 
                                </li>  
                            </ul>

                            <ul class="conditions">
                                <li><label for="money-reward">Rewards</label></li>
                                <li>
                                    <select class="select-jquery-color">
                                        <option>5</option>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                        <option>50</option>
                                    </select> 
                                </li>  
                                 <li>
                                    <label for="currency-product"></label>
                                    <select class="select-jquery-color">
                                        <option>Currency<img src="img/icons/dropdown.svg"></option>
                                        <option>EUR</option>
                                        <option>USD</option>
                                        <option>GBP</option>
                                    </select> 
                                </li>  
                            </ul>

                        <button><input type="submit">Send Proposal</button>
                    </form>
            </div>
        </section>
    </div>
</div>


<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



