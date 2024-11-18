<?php
include("includes/header.php");
include("includes/navbar.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Ensure session variables are defined
$login_status = isset($_SESSION["status"]) ? $_SESSION["status"] : "";

if (isset($_SESSION['registered'])) {
    unset($_SESSION['registered']);
    header("Location: index.php");
    exit;
}
if (isset($_SESSION['logged_in']) && isset($_SESSION['count'])) {
    unset($_SESSION['count']);
    header("Location: index.php");
    exit;
}
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Content -->
            </div>
        </div>
    </div>
</div>

<script>
<?php if ($login_status): ?>
  alert("<?php echo $login_status; ?>");
<?php endif; ?>

  // After the alert, unset the session variable to prevent it from showing again
<?php if ($login_status): ?>
  <?php unset($_SESSION['status']); ?>
<?php endif; ?>
</script>

<?php include("includes/footer.php"); ?>
