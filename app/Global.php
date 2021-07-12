<?php
include_once('Auth.php');
include_once('Session.php');

function ByPass($role)
{
    $auth = new Auth();
    $auth->ByPass($role);
}

function flash()
{
    $session = new Session();
    return $session->flash();
}

function flasher($data)
{
    $session = new Session();
    $session->flasher($data);
    return true;
}

function user()
{
    $session = new Session();
    return $session->user();
}
function logout()
{
    $session = new Session();
    return $session->logout();
}
