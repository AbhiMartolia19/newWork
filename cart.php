<?php
include("includes/header.php");
include("includes/navbar.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = []; // Initialize an empty cart
    $_SESSION['cart_count'] = 0; // Initialize count to zero
}
?>

<?php
include("includes/footer.php");
?>