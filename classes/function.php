<?php

function db_connect(){

    $db_conf = array(
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'name' => 'testwars',
    );

    $link = mysqli_connect($db_conf['host'], $db_conf['user'], $db_conf['password']);

    if ($link->error){
        echo 'error';
        return false;
    }
    mysqli_select_db($link, $db_conf['name']);
    return $link;
}