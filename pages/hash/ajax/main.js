$(document).ready( function() { 

    $("#send_encode").click( function(){
        let way_encode = way_select.value;
        $.post('/pages/hash/ajax/script_encode.php', {str: $("#str_encode").val(), way_hash: way_encode}, function(data){
            //location.reload();
            answer_encode.value = data;
        });
    });

    $("#send_decode").click( function(){
        let way_decode = way_select.value;
        $.post('/pages/hash/ajax/script_decode.php', {str: $("#str_decode").val(), way_hash: way_decode}, function(data){
            //location.reload();
            answer_decode.value = data;
        });
    });

});