<?php

require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
class controller{
    
    public function __construct(){
        $loader = new FilesystemLoader(__DIR__ . '/templates');
        $this->twig = new Environment($loader);
        if (isset($_SESSION['idUser'])){
            session_start();
            $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        }
    }
}