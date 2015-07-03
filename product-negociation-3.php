<?php

$page = '| Negociation'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>

<!-- USER INFO COLUMN -->
<div class="main-container">
	<div class="container_12 container_10 container_8 container_6">
        
        <!-- USER-GENERAL-INFO -->
        
        <?php

        include('includes/negociating-2.php');

        ?>

		<section id="negociation" >

            <div id="icon" class="grid_1_1200 grid_1_1024 grid_1_768 grid_1_320">
                <div class="title">
                        <span><img src="img/icons/chat.svg" alt="chat"></span>
                </div>
            </div>

            <div id="chat" class="grid_6_1200 grid_6_1024 grid_7_768 grid_6_320">

                <div class="title">
                    <h2>Chat with María Martinez</h2>
                </div>
                
                <div id="chat-description">
                    <p>Ask what you need to the wisher in order to deliver the items. If you want to change the terms of the deal, you can <span>start a negociation.</span></p>
                
                    <form id="comment-form" class="comment-form">
                        <textarea id="text" name="textarea" placeholder="ex. I can go to the airport and meet you to pick up the cheese."></textarea>
                        <!--<button id="submit__" class="comment-submit">SEND</button>-->
                        <input type="button" id="submit" class="comment-submit" value="SEND">
                    </form>

                    <div id="upload-links">
                        <!--<input type="file" name="pic" accept="image/*">
                        <input type="submit">-->
                        <img src="img/icons/upload_chat1.svg" alt=upload>
                        <img src="img/icons/upload_chat2.svg" alt=upload>
                        <img src="img/icons/location2.svg" alt=upload>
                    </div>

                </div>

                <div id="newDivs">

                        <ul id="comment-list">

                            <li class="comment-1">
                                <div class="comment-user-photo">
                                    <a href=""><img src="img/users_pic/user_1_xs.jpg" class="user-pic" alt="user-1"></a>
                                </div>
                                <div class="wrote-comment" class="grid_5_1200 grid_4_1024 grid_6_768 grid_5_320">
                                    <p>I accept your new deal, but un exchange can you take me to the city from the airport</p>
                                    <p class="chat-date">31/July/2015</p>
                                </div>
                            </li>

                             <li class="comment-2">
                                <div class="comment-user-photo-2">
                                    <a href=""><img src="img/users_pic/user_9_xs.jpg" class="user-pic" alt="user-9"></a>
                                </div>
                                <div class="wrote-comment-2" class="grid_5_1200 grid_4_1024 grid_6_768 grid_5_320">
                                    <p>Here is my new proposal lets see what can make both happy :)</p>
                                    <p class="chat-date">31/July/2015</p>
                                </div>
                            </li>

                        </ul>       
                </div>

                <div class="clear"></div>

                
                <div id="new-proposal">   

                    <div id="intro-new-proposal">
                        <h4>New terms for the deal</h4>
                    </div>

                    <div id="details-reward">
                        <ul>
                            <li>
                                <h4><img src="img/icons/money.svg" class="icon-circle" alt="money"></h4>
                                <h4>Reward &nbsp; <span>$12</span> &nbsp; $20</h4>
                                <ul>
                                    <li class="reward-description"><h5>Cost of the product: $8</h5></li>
                                    <li class="reward-description"><h5>Total inversion in this deal: &nbsp;<span>$20</span> &nbsp; $28</h5></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div id="new-actions-button">
                        <button class="accepted">Proposal Accepted</button>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>


<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



