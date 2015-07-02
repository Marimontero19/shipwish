

$(function() {

    //New chats
      $('#submit').click(function(event) {
        event.preventDefault();
        var text = $('#text').val();
        $('#newDivs').append(

            '<li style="list-style-type: none;" class="comment-2">' 
            +'<div class="comment-user-photo-2"><a href=""><img src="img/users_pic/user_9_xs.jpg" class="user-pic" alt="user-9"></a></div>'
            +'<div class="wrote-comment-2" class="grid_5_1200 grid_4_1024 grid_6_768 grid_5_320"><p>'
            + text +
            +'</p><p class="chat-date">31/July/2015</p></div>'
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

/*$(document).ready (

        //Reset filter
         $("#reset").on("click", function () {
            $('#filter_details').prop('selected', function() {
                return this.defaultSelected;
            });
         });
);*/





