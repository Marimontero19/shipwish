

$(function() {

    //New chats
      $('#submit').click(function(event) {
        event.preventDefault();
        var text = $('#text').val();
        $('#newDivs').append('<div>' + text + '</div>');
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





