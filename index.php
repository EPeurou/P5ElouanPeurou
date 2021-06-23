<?php

require('controller.php');


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        homepage();
    }
    elseif ($_GET['action'] == 'flux') {
        flux();
    }
}
else {
    homepage();
}
