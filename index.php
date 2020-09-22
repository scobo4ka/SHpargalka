<?php

    //Подключение ядра сайта
    require 'includes/engine.php';
    
    //Подключение head
    require 'blocks/head.html';
    require 'blocks/nav.html';
    require 'blocks/auth-reg-modals.html';
    
    //Проверка на мод отображение сайта
    if( empty($_GET['mode']) ) {

        require 'pages/primary/index.php';

    } else if( $_GET['mode'] == 'transfer' ) {

        require 'pages/transfer/index.php';

    } else if( $_GET['mode'] == 'hash' ) {

        require 'pages/hash/index.php';

    }

    require 'blocks/scripts.js';

?>