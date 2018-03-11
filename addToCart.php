<?php

var_dump($_GET);
var_dump($_COOKIE);

//modification des cookie
if (isset($_GET['add_to_cart'])) {
    $ref = $_GET['add_to_cart'];
    var_dump($ref);
    if (isset($_COOKIE[$ref])) {
        $amount = $_COOKIE[$ref] + 1;
        setcookie($ref, $amount, time() + 60 * 10);
    } else {
        echo 'b<br>';
        setcookie($ref, 1, time() + 60 * 10);
    }
}

header('Location: index.php');
