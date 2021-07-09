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
