<?php
$cookieList = [32, 36, 46, 58];

$countCookieCart = 0;
foreach ($cookieList as $cookie) {
    $countCookieCart = $countCookieCart + $_COOKIE[$cookie];
}
