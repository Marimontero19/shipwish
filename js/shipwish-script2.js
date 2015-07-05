

$(function() {

    //New chats
      $('#submit').click(function(event) {
        event.preventDefault();
        var text = $('#text').val();
        $('#newDivs').prepend(

            '<li style="list-style-type: none;" class="comment-2">' 
            +'<div class="comment-user-photo-2"><a href=""><img src="img/users_pic/user_9_xs.jpg" class="user-pic" alt="user-9"></a></div>'
            +'<div class="wrote-comment-2" class="grid_5_1200 grid_4_1024 grid_6_768 grid_5_320"><p>'
            + text 
            +'</p><p class="chat-date">2/June/2015</p></div>'
            +'</li>');
      });

});


$(function() {

        //Reset filter
         $("#reset").on("click", function () {
            $('#filter_details').prop('selected', function() {
                return this.defaultSelected;
            });
         });
});


$(document).ready (function(){

        //abre boton de volunteer
        $("#choose-volunteer").hide();
        $("#volunteer-radio").click(function(e){
            $("#choose-volunteer").toggle();
        });

        //cierra boton de money
      $("#money-radio").click(function(e){
          $("#choose-volunteer").hide();
      });

      //Dropdown 1 de caracteristicas
      $(".drop1").hide();
      $("#showdrop1").click(function(e){
          $(this).attr( "src", function() {
            return "img/icons/info-over.svg";
          });
          $(".drop1").toggle();
      });

      //Dropdown 2 de caracteristicas
      $(".drop2").hide();
      $("#showdrop2").click(function(e){
          $(this).attr( "src", function() {
            return "img/icons/info-over.svg";
          });        
          $(".drop2").toggle();
      });

       //Dropdown 3 de caracteristicas
      $(".drop3").hide();
      $("#showdrop3").click(function(e){
          $(this).attr( "src", function() {
            return "img/icons/info-over.svg";
          });
          $(".drop3").toggle();
      });

});






