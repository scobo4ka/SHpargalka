<?php

    $data = $_POST;

    if( empty($data['way_hash']) ) {
        echo 'Выберите способ раскодировки!';
    } else {
        if( empty($data['str']) ) {
            echo 'Введите строчку которую надо закодировать!';
        } else {
            if($data['way_hash'] == 'base64') {
                $decoded = "";
                for ($i=0; $i < ceil(strlen($data['str'])/256); $i++)
                    $decoded = $decoded . base64_decode(substr($data['str'], $i*256,256)); 
                    
                echo $decoded;
            } else {
                //echo hash($data['way_hash'], $data['str']);
            }
        }
        
    }   

?>