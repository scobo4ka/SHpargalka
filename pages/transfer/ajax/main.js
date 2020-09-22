$(document).ready( function() { 

    $("#send").click( function(){
        $.post('/pages/transfer/ajax/script.php', {number: $("#number").val(), cc: $("#cc").val(), to_cc: $("#to_cc").val()}, function(data){
            //location.reload();
            answer.value = data;
        });
    });

});