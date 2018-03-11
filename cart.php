<?php

session_start();

if (null == isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

require 'inc/head.php';
?>

<section class="cookies container-fluid">
    <div class="row">
        <h1>Votre panier :</h1>
        <?php
        foreach ($cookieList as $ref => $name) {
            if (isset($_COOKIE[$ref])) {
                ?>
                <div>
                    <ul>
                        <li><b><?= $name; ?></b> ref : <i><?= $ref; ?></i> quantité : <?= $_COOKIE[$ref]; ?></li>
                    </ul>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
