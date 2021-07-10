<?php
define('MYHTTP', 'http://'.$_SERVER['HTTP_HOST'] . '/mushiPHP/fahad/');
include_once(ROOT.'app/Global.php');
$user = user();
ByPass($user['role'] ?? 'user');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='<?=MYHTTP?>/assets/css/dashboard.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='<?=MYHTTP?>/assets/css/addUser.css'>
    <title>Task Management System</title>
</head>
<bod>

    <nav class="navbar navbar-expand-lg navbar-light bg-light row">
        <div class="col-6 col-sm-6">
            <a class="navbar-brand" href="#"><?= $pageName ?? "Dashboard" ?></a>
        </div>
        <div class="col-6 col-sm-6 text-right">
            <button class="btn my-2 my-sm-0 signOut" onclick="location.href = './<?=MYHTTP?>/auth/logout/'" type="submit">Sign Out</button>
        </div>
    </nav>


    <!--sidebar button responsive -->
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fal fa-window-close" id="cancel"></i>
    </label>
    <!--sidebar button responsive -->
    <?php
    include_once(ROOT.'shared/_menu_' . ($user['role'] ?? '') . '.php');
    ?>