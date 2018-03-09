<?php

session_start();

if ($_POST) {
    if (isset($_POST['loginname'])) {
        if ("" !== $_POST['loginname']) {
            $_SESSION['loginname'] = $_POST['loginname'];
            header('Location: index.php');
            exit();
        }
    }
}
header('Location: login.php');
exit();
