<?php
session_start();
session_unset();
session_destroy();
header("location: http://127.0.0.1/P5_01_Projet/index.php?action=home");

exit;