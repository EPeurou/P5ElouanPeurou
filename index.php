<?php

require 'controllers/msgController.php';
require 'controllers/homeController.php';
require 'controllers/loginRegisterController.php';
require('controllers/adminController.php');
require 'controllers/fluxController.php';
require 'controllers/postController.php';
$fluxController = new fluxController;
$postController = new postController;
$adminController = new adminController;
$loginRegisterController = new loginRegisterController;
$msgController = new msgController;
$homeController = new homeController;

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        $homeController->homepage();
    }
    elseif ($_GET['action'] == 'flux') {
        $fluxController->flux();
    }
    elseif ($_GET['action'] == 'post') {
        $postController->post();
    }
    elseif ($_GET['action'] == 'confirm') {
        $msgController->confirm();
    }
    elseif ($_GET['action'] == 'newPost') {
        $postController->newPost();
    }
    elseif ($_GET['action'] == 'myPost') {
        $postController->myPost();
    }
    elseif ($_GET['action'] == 'postDelUp') {
        $postController->postDelUp();
    }
    elseif ($_GET['action'] == 'postUpdate') {
        $postController->postUpdate();
    }
    elseif ($_GET['action'] == 'login') {
        $loginRegisterController->login();
    }
    elseif ($_GET['action'] == 'register') {
        $loginRegisterController->register();
    }
    elseif ($_GET['action'] == 'admin') {
        $adminController->admin();
    }
    elseif ($_GET['action'] == 'confirmComment') {
        $msgController->confirmComment();
    }
    elseif ($_GET['action'] == 'error') {
        $msgController->error();
    }
}
else {
    $homeController->homepage();
}
