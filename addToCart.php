<?php

var_dump($_GET);
var_dump($_COOKIE);

//modification des cookie
if (isset($_GET['add_to_cart'])) {
    $number = $_GET['add_to_cart'];
    var_dump($number);
    if (isset($_COOKIE[$number])) {
        $amount = $_COOKIE[$number] + 1;
        setcookie($number, $amount, time() + 60 * 10);
    } else {
        echo 'b<br>';
        setcookie($number, 1, time() + 60 * 10);
    }
}

header('Location: index.php');
