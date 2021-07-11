<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/mushiPHP/fahad/');
include_once(ROOT . 'app/DB.php');
include_once(ROOT . 'app/Session.php');
include_once(ROOT . 'app/Global.php');
$db = new DB();
$session = new Session();
$user = user();
ByPass('admin');
$err = [];
$isValid = true;
if (empty($_POST['full_name'])) {
    $isValid = false;
    array_push($err, 'full Name is requires');
}
if (empty($_POST['phone_no'])) {
    $isValid = false;
    array_push($err, 'phone No is requires');
}
if (empty($_POST['department'])) {
    $isValid = false;
    array_push($err, 'department is requires');
}
if (empty($_POST['designation'])) {
    $isValid = false;
    array_push($err, 'designation is requires');
}
if (empty($_POST['email'])) {
    $isValid = false;
    array_push($err, 'email is requires');
}
if (empty($_POST['password'])) {
    $isValid = false;
    array_push($err, 'password is requires');
}
if (empty($_POST['cpassword'])) {
    $isValid = false;
    array_push($err, 'confirm password is requires');
}
if (($_POST['password'] ?? '1') != ($_POST['cpassword'] ?? '2')) {
    $isValid = false;
    array_push($err, 'password not matched');
}

if (($_POST['password'] ?? '1') != ($_POST['cpassword'] ?? '2')) {
    $isValid = false;
    array_push($err, 'password not matched');
}
$count =  "SELECT count(*) as 'count' FROM `auth` WHERE `IsActive`=1 AND `email`='" . $_POST['email'] . "'";
$count = ($db->toArray($db->query($count))[0]['count'] ?? 0);
if ($count > 0) {
    $isValid = false;
    array_push($err, 'this email is already added');
}
if (!$isValid) {
    $session->flasher($err);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    return;
}
$q = "INSERT INTO `users`(`full_name`, `phone_no`, `department`, `designation`, `email`) VALUES ('" . $_POST['full_name'] . "','" . $_POST['phone_no'] . "','" . $_POST['department'] . "','" . $_POST['designation'] . "','" . $_POST['email'] . "');";
$db->query($q);
$added = $db->toArray($db->query("SELECT `id` FROM `users` WHERE `email`='" . $_POST['email'] . "'"));
$q = "INSERT INTO `auth`(`email`, `password`, `user_id`) VALUES ('" . $_POST['email'] . "','" . md5($_POST['email']) . "','" . $added[0]['id'] . "')";
$db->query($q);
$session->flasher(['user added!']);
header('Location: ' . $_SERVER['HTTP_REFERER']);
