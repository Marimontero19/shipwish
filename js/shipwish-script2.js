

 //$(document).ready (

    	//New chats
    	//$('#submit').click(function() {
    	 // var text = $('#input').val();
    	  //$('#newDivs').append('<div>' + text + '</div>');
    	//});

$(document).ready (

      //$(function() {
           // $( "#cost-product" ).selectmenu();
 
          // $( "#currency-product" ).selectmenu();

          // $( "#money-reward" ).selectmenu();
 
           //$( "#currency-reward" )
           //  .selectmenu()
           //  .selectmenu( "menuWidget" )
           //  .addClass( "overflow" );
           //});

        Reset filter
         $("#reset").on("click", function () {
            $('#filter_details').prop('selected', function() {
                return this.defaultSelected;
            });
       });


//dejar comentarios
  function leaveComment(){

    $('.comment-submit').click(function(e) {
      e.preventDefault();
      var comment = $('.comment-form').find('textarea').val();

      if (comment != '') {

        $('.comment-list').prepend('<li class="comment-2">'
          +'<div class="comment-user-photo"><a href=""><img src="img/users_pic/user_9_xs.jpg" class="user-pic" alt="user-9"></a></div>'
          +'<div class="wrote-comment" class="grid_5_1200 grid_4_1024 grid_6_768 grid_5_320">'
          +comment
          +'<p class="chat-date">31/July/2015</p></div>'
          +'</div></li>');

      } else {
        $('.no-comment').removeClass('hide');
      }


    });

  }
  leaveComment();




