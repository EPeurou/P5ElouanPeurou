<?php
session_start();
session_unset();
session_destroy();
// unset($_SESSION);
header("location: https://elouanpeurou.tech/index.php?action=home");

exit;
// echo print_r($_SESSION,true);