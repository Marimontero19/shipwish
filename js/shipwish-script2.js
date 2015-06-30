

 //$(document).ready (
	//New chats
	//$('#submit').click(function() {
	  // var text = $('#input').val();
	   //$('#newDivs').append('<div>' + text + '</div>');
	//});

 $(function() {
            $( ".date_picker" ).datepicker({
                showOn: "button",
                buttonImage: "img/icons/calendar.svg",
                buttonImageOnly: true
            });
        });

$(document).ready (

        //Selectable JqueryUI
        function() {
            //$(".select-jquery-color").selectmenu();
        	$(".select-jquery-color" ).selectmenu({ icons: { button: "custom-icon" } });
        });

$(document).ready (

        //Reset filter
        $("#reset").on("click", function () {
            $('.select option').prop('selected', function() {
                return this.defaultSelected;
            });
        });





