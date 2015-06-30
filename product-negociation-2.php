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
                    <h2>Chat with María Martinez</h2>
                </div>
                <div id="negociation-description">
                    <h4>The traveler has started a negociation. </h4>
                </div>
                
                   
                </div>
        </section>
    </div>
</div>


<?php

$page = 'home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/footer.php');

?>



