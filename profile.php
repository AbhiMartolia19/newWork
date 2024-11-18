<?php
include("includes/header.php");
include("includes/navbar.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
include("includes/footer.php");
?>