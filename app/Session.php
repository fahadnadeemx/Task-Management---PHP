<?php

class Session
{
    /**
     * Connect with database
     * __construct
     */
    function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function flasher(array $data)
    {
        $_SESSION["flash"] = $data;
    }

    public function flash()
    {
        $_return = $_SESSION['flash'] ?? [];
        unset($_SESSION['flash']);
        return $_return;
    }

    public function user()
    {
        return $_SESSION['user'] ?? [];
    }

    public function setUser($user)
    {
        $_SESSION['user'] = $user;
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }
}
