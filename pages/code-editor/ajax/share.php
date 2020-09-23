<?php

    include $_SERVER['DOCUMENT_ROOT'] . '/includes/engine.php';

    $code_hash = base64_encode(rand(1000000000, 9999999999));

    $filename = $_SERVER['DOCUMENT_ROOT'] . '/uploads/txt/' . $code_hash . '.txt';
    $text = $_POST['txt'];
    $text = str_replace("\n", " // ", $text);

    $f_hdl = fopen($filename, 'w');
    fwrite($f_hdl, $text);
    fclose($f_hdl);

    $share = R::dispense('share');
    $share->code_hash = $code_hash;
    $share->mode = $_POST['mode'];
    R::store($share);

    echo $code_hash;

?>