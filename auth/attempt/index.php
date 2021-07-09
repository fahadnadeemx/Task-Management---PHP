<?php
include_once('../../app/Auth.php');
include_once('../../app/Session.php');
$auth = new Auth();
$session = new Session();
$auth->ByPass('guest');
if (count($_POST) != 2 || empty($_POST['email']) || empty($_POST['password'])) {
    $session->flasher(['Email & Password is required']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    return;
}
if (!$auth->login($_POST)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    return;
}
header('Location: ./../../dashboard');