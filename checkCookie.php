<?php
require 'cookieList.php';

$countCookieCart = 0;
foreach ($cookieList as $ref => $name) {
    if (isset($_COOKIE[$ref])) {
            $countCookieCart = $countCookieCart + $_COOKIE[$ref];
    }
}
