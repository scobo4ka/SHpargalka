<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . '/libs/rb-mysql.php';

    $db = [
        'host' => 'host',
        'login' => 'login',
        'password' => 'pass',
        'dbname' => 'db'
    ];

    //Влючаем rb
    R::setup( 'mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'], $db['login'] , $db['password'] );

    $link = mysqli_connect($db['host'], $db['login'], $db['password'], $db['dbname']);
    mysqli_query($link, "SET CHARACTER SET 'utf8'");

?>