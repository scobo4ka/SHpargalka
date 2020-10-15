<?php

    $data = $_POST;

    if( empty($data['way_hash']) ) {
        echo 'Выберите способ кодировки!';
    } else {
        if( empty($data['str']) ) {
            echo 'Введите строчку которую надо закодировать!';
        } else {
            if($data['way_hash'] == 'base64') {
                echo base64_encode($data['str']);
            } else {
                echo hash($data['way_hash'], $data['str']);
            }
        }
        
    }   

?>
