<?php
class Auth {
    public function __construct() {
        session_start();
    }

    public function login($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['login'] = $user['login'];
    }

}
?>
