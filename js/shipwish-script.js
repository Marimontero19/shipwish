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


$(document).ready(function(){
    $(function() {
        $( document ).tooltip({
          position: {
            my: "center bottom",
            at: "center bottom+70px",
            using: function( position, feedback ) {
              $( this ).css( position );
              $( "<div>" )
                .addClass( "arrow-tooltip" )
                .appendTo( this );
            },
          track: true
          }
        });
    });
});


/* DROPDOWN USER */
$(document).ready(function(){
    $( ".button-dropdown-user" ).click(function() {
      $( ".dropdown-user" ).animate({
        display: "block",
        height: [ "toggle", "swing" ],
        opacity: [ "toggle", "swing" ]
      });
    });
});


/* AUTOCOMPLETE */


/* CITIES */
$(function() {
    var shipwishcities = [
        "Amsterdam",
        "Argentina",
        "Barcelona",
        "Beja",
        "Basel",
        "Berlin",
        "Bilbao",
        "Bogotá",
        "Buenos Aires",
        "Cali",
        "Cork",
        "Dublin",
        "Beijing",
        "Chile",
        "England",
        "Hawai",
        "Liberia",
        "Lleida",
        "India",
        "Italy",
        "Madrid",
        "Miami",
        "Milano",
        "New York",
        "NY",        
        "Paris",
        "Pisa",
        "Perth",
        "Rome",
        "Olot",
        "Oslo",
        "San José",
        "San Juan",
        "Tokio",
        "Verona",
        "Yala"
    ];
    $( ".input-trips, .location-icon" ).autocomplete({
      source: shipwishcities
    });
  });



/* WISHES */
$(function() {
    var wishes = [
        "Pecorino Romano Cheese",
        "Lemon Drizzle",
        "COLAB Dry Shampoo",
        "Head Medicine pills",
        "Lakeland's Chef's Knife",
        "Leather jacket",
        "Beans of Costa Rica",
        "Crack seeds",
        "Blue jacket",
        "Olive oil",
        "Spanish Bread",
        "Shoes",
        "Socks"
    ];
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#wish" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            wishes, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
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



