<?php

class User {
   static function login($routeParams) {
        @session_start();

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = json_decode(file_get_contents(dirname(__FILE__).'/_usr/'.$username.'.json'), true);
        $crypted = $user["password"];

        if (password_verify($password, $crypted))
        {
                $_SESSION['username'] = $username;
                if (isset($_SESSION['returnto'])) {
                        header('Location:'.$_SESSION['returnto']);
                }
                else {
                        header('Location:/usr/'.$username);
                }
        }
        else
        {
                unset($_SESSION['username']);
                header('HTTP/1.0 401 Unauthorized');
                header('Location:/login');
        }
   }
   static function get($routeParams) {
        return json_decode(file_get_contents(dirname(__FILE__).'/_usr/'.$routeParams["username"].'.json'), true);
   }
   static function logout($routeParams) {
        session_destroy();
        header('Location:/login');
   }
   static function join($routeParams) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if (file_exists(dirname(__FILE__).'/_usr/'.$username.'.json')) {
            header('Location:/join');
        }
        $crypted = password_hash($password, PASSWORD_BCRYPT);

        $user = array();
        $user["username"] = $username;
        $user["password"] = $crypted;

        file_put_contents(dirname(__FILE__).'/_usr/'.$username.'.json', json_encode($user));
        header('Location:/login');
   }
}
?>
