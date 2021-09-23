<?php

class User
{

    public function __construct()
    {
        $this->db = Controller::db();

    }

    public function isAdmin()
    {
        if(!$_SESSION['logged']) return 0;
        $sid = $_SESSION['logged'];
        $find = $this->db->query("SELECT `sudo` from users WHERE `sid` = '$sid'");
        return $find->rowCount();
    }


    public function checkLogin()
    {

        $logged = $_SESSION['logged'];
        $login = $_POST['login'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        //Login
        if ($user && $pass && $login) {
            $pass_crypt = md5($pass);
            $find = $this->db->query("SELECT `id` from users WHERE `user` = '$user' AND `pass`='$pass_crypt'");

            if ($find->rowCount()) {
                $hash = md5($user . $pass_crypt . time());

                $up_hash = $this->db->query("UPDATE `users` SET `sid`='$hash' WHERE (`id`='{$find->fetch()['id']}')");
                if ($up_hash) {
                    $_SESSION['logged'] = $hash;
                }
                //save sess db
            } else {
                unset($_SESSION['logged']);
                session_destroy();
            }
        }

        return $logged;


    }
}
