$(document).ready( function() { 

    $('#code-share').click( function() {

        $.post('/pages/code-editor/ajax/share.php', {txt: editor.getValue(), mode: code_switch.value}, function(data){

            toasts.innerHTML = "<div style='position: absolute; right: 5px; top: 5px;' aria-live='assertive' aria-atomic='true' class='toast bg-light' id='myToast'><div class='toast-header'><strong class='mr-auto'><i class='fas fa-share-square'></i> Ссылка на код</strong><button type='button' class='ml-2 mb-1 close' data-dismiss='toast'>&times;</button></div><div class='toast-body'>Мы сохранили ваш код, теперь вы можете им поделиться по ссылке: <a href='https://shp.net/?mode=code-editor&id=" + data + "'>https://shp.net/?mode=code-editor&id=" + data + "</a></div></div>";
            
            $('#myToast').toast({
                autohide: false
            });
            $('#myToast').toast('show');

            //alert(data);
        
        });

    });

});