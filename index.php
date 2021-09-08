<?php

require('controller.php');


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        homepage();
    }
    elseif ($_GET['action'] == 'flux') {
        flux();
    }
    elseif ($_GET['action'] == 'contact') {
        contact();
    }
    elseif ($_GET['action'] == 'apropos') {
        apropos();
    }
    elseif ($_GET['action'] == 'post') {
        post();
    }
    elseif ($_GET['action'] == 'confirm') {
        confirm();
    }
    elseif ($_GET['action'] == 'newPost') {
        newPost();
    }
    elseif ($_GET['action'] == 'myPost') {
        myPost();
    }
    elseif ($_GET['action'] == 'postDelUp') {
        postDelUp();
    }
    elseif ($_GET['action'] == 'postUpdate') {
        postUpdate();
    }
    elseif ($_GET['action'] == 'login') {
        login();
    }
    elseif ($_GET['action'] == 'register') {
        register();
    }
    elseif ($_GET['action'] == 'admin') {
        admin();
    }
    elseif ($_GET['action'] == 'confirmComment') {
        confirmComment();
    }
    elseif ($_GET['action'] == 'error') {
        error();
    }
}
else {
    homepage();
}
