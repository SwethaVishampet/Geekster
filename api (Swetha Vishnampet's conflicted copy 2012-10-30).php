<?php

function connect_db() {
    $database = "cg3002_hq";
    $connect = mysql_connect('localhost', 'root', 'bitnami');
    if (!$connect) {
        echo 'mur';
        die(mysql_error());
    }
    $db_connect = mysql_select_db($database, $connect);
    if (!$db_connect) {
        die(mysql_error());
    }
}

function getUser() {
    global $current_user;
    return $current_user->id;
}
?>
