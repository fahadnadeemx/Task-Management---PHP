<?php
include_once('DB.php');
include_once('Session.php');

class Auth
{
    protected $db;
    protected $session;
    /**
     * Connect with database
     * __construct
     */
    function __construct()
    {
        $this->db = new DB();
        $this->session = new Session();
    }

    public function login($data)
    {
        $q =  "SELECT * FROM `auth` WHERE `IsActive`=1 AND `email`='" . $data["email"] . "' AND `password` = '" . $this->pw($data["password"]) . "'";
        $result = $this->db->query($q);
        $count  = $this->db->count($result);
        if ($count == 0) {
            $this->session->flasher(['Sorry, provided email & password did not match in our system']);
            return false;
        } else {
            $user = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $user[] = $row;
            }
            $user = $user[0];
            $this->session->setUser($user);
            return true;
        }
    }

    public function pw(string $pw)
    {
        return md5($pw);
    }

    public function ByPass($role)
    {
        $user = $this->session->user();
        if (($user['role'] ?? 'guest') != $role) {
            switch (($user['role'] ?? 'guest')) {
                case 'guest':
                    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/taskman/auth/');
                    break;
                default:
                    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/taskman/dashboard/');
                    break;
            }
        }
    }
}
