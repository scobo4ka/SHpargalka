<?php

    $data = $_POST;

    if( empty($data['number']) ) {
        echo 'Введите число!';
    } else {
        if( empty($data['cc']) ) {
            echo 'Введите cc!';
        } else {
            if( empty($data['to_cc']) ) {
                echo 'Введите cc в которую надо перевести!';
            } else {
                $result = mb_strtoupper(base_convert($data['number'],$data['cc'],$data['to_cc']));
                echo $result;
            }
        }
    }   

?>