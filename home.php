<?php

session_start();
if(empty($_SESSION['user_id']) || $_SESSION['user_id'] == NULL){
    header ('Location: index.php');
    exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <?php require_once('pages/header.php'); ?>
    </head>

    <body>
    <div class="page-container">

        <div class="page-sidebar">
            <?php require_once('pages/navigation/side-menu.php'); ?>
        </div>

        <div class="page-content">
            <?php require_once('pages/navigation/top-bar.php'); ?>

            <ul class="breadcrumb">
                <li><a href="/home.php">Home</a></li>
                <li class="active">Dashboard</li>
            </ul>

            <div class="page-content-wrap">
                <?php require_once('pages/dashboard/dashboard.php'); ?>
            </div>

        </div>
    </div>

    <?php require_once('pages/footer.php'); ?>
    <?php require_once('pages/plugins.php'); ?>

    </body>
</html>






