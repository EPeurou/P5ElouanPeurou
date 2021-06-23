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
}
else {
    homepage();
}
