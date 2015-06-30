

 $(document).ready (
	//New chats
	$('#submit').click(function() {
	  var text = $('#input').val();
	  $('#newDivs').append('<div>' + text + '</div>');
	});

$(document).ready (

       $(function() {
            $( "#cost-product" ).selectmenu();
 
            $( "#currency-product" ).selectmenu();

            $( "#money-reward" ).selectmenu();
 
            $( "#currency-reward" )
              .selectmenu()
              .selectmenu( "menuWidget" )
              .addClass( "overflow" );
  });

$(document).ready (

        //Reset filter
        $("#reset").on("click", function () {
            $('.select option').prop('selected', function() {
                return this.defaultSelected;
            });
        });





