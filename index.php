<?php
require 'model/selectPostDetails.php';
require 'model/selectMyPost.php';
require 'model/selectComment.php';
require 'model/selectCommentAdmin.php';
require 'model/selectUserContact.php';
require 'model/selectAdmin.php';
require 'model/selectCategory.php';
require 'model/selectFlux.php';
require 'controller.php';

spl_autoload_register(function ($class){
    require_once 'controllers/' . $class . '.php';
});

$fluxController = new fluxController;
$postController = new postController;
$adminController = new adminController;
$loginRegisterController = new loginRegisterController;
$msgController = new msgController;
$homeController = new homeController;
$monget = filter_input_array(INPUT_GET, FILTER_DEFAULT);

$action = isset($monget['action']) ? htmlentities($monget['action'], ENT_QUOTES) : "";

if ($action != "") {
    if ($action == 'home') {
        $homeController->homepage();
    }
    elseif ($action == 'flux') {
        $fluxController->flux();
    }
    elseif ($action == 'post') {
        $postController->post();
    }
    elseif ($action == 'confirm') {
        $msgController->confirm();
    }
    elseif ($action == 'newPost') {
        $postController->newPost();
    }
    elseif ($action == 'myPost') {
        $postController->myPost();
    }
    elseif ($action == 'postDelUp') {
        $postController->postDelUp();
    }
    elseif ($action == 'postUpdate') {
        $postController->postUpdate();
    }
    elseif ($action == 'login') {
        $loginRegisterController->login();
    }
    elseif ($action == 'register') {
        $loginRegisterController->register();
    }
    elseif ($action == 'admin') {
        $adminController->admin();
    }
    elseif ($action == 'confirmComment') {
        $msgController->confirmComment();
    }
    elseif ($action == 'error') {
        $msgController->error();
    }
    else {
        $msgController->error();
    }
}
else {
    $homeController->homepage();
}
