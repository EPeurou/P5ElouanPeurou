<?php
class session {

    public static function put($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function get($key){
        // error_log("[get: ".$_SESSION['idUser']."]");
        return (isset($_SESSION[$key]) ? $_SESSION[$key] : null);
    }

    public static function forget($key){
        unset($_SESSION[$key]);
    }
}