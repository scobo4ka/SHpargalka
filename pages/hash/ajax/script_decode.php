<?php

    $data = $_POST;
    setlocale(LC_ALL, 'ru_RU');

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
            } if($data['way_hash'] == 'asсii') {
                
                for($i == 0; $i < strlen($data['str']); $i = $i + 2) {
                    $number = base_convert($data['str'][$i] . $data['str'][$i + 1], 16, 10);
                    $char = chr($number);
                    echo iconv('CP1251','UTF-8',$char);
                }
                
            } else {
                //echo hash($data['way_hash'], $data['str']);
            }
        }
        
    }   

?>
