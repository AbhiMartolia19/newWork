<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION["logged_in"] = false;
$_SESSION['registered'] = true;
$_SESSION['is_admin'] = false;
unset($_SESSION['current_user']);
header("Location: index.php");
exit();

?>