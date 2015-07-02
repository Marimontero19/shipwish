$(document).ready (

        //Selectable JqueryUI
        function() {
            $(".select-jquery").selectmenu();
        
        });

$(document).ready (
    
        //Datepicker JqueryUI
          function() {
            $(".datepicker").datepicker();
          });

		 //Radio button JqueryUI

		 $(function() {
		    $( "#radio" ).buttonset();
		  });

$(document).ready(function(){
    $('.card').on("mouseenter",function(){

        var ref=$(this);
        $(this).find('.button_look').animate({
            height: "36px"
        }, 100, function(){
           // ref.find('.button_look h4').css("display","block");
        });
        $(this).find('.button_look h4').css("display","block");
/*
 $(this).find('.button_look').css('height','36px');
$(this).find('.button_look h4').css("display","block");
*/
    });
});


$(document).ready(function(){
    $('.card').on("mouseleave",function(){

        var ref=$(this);
        $(this).find('.button_look').animate({
            height: "4px"
        }, 100, function(){
           // ref.find('.button_look h4').css("display","block");
        });
        $(this).find('.button_look h4').css("display","none");
/*
 $(this).find('.button_look').css('height','36px');
$(this).find('.button_look h4').css("display","block");
*/
    });
});


/*
//HEIGHT
$document.ready(function(){
        $(".create_wish").resize(function(){
        var altura = $("#msform").height()
        });

        $(".create_wish").resize(); //on page load

});

*/



