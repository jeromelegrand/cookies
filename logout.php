<?php
require 'cookieList.php';

session_start();
session_unset();
session_destroy();

foreach ($cookieList as $ref => $name) {
    if (isset($_COOKIE[$ref])) {
        setcookie($ref, 0, time() - 1);
    }
}

header('Location: login.php');
exit();
