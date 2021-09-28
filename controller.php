<?php


require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Session{
    public static function put($key, $value){
        $_SESSION['token'] = $value;
    }
}

class controller
{
    public function __construct(){
        $loader = new FilesystemLoader(__DIR__ . '/templates');
        $this->twig = new Environment($loader);
        if (!isset($value)){
            session_start();
            $value = md5(uniqid(mt_rand(), true));
        }
    }
}