<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$isRegistered = isset($_SESSION['registered']) && $_SESSION['registered'];
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
$is_admin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'];
?>

<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">RANG</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <?php if ($is_admin): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin_dashboard.php">Admin Dashboard</a>
                                    </li>
                                <?php endif; ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="products.php">Explore</a>
                                </li>
                                <?php if (!$isRegistered && !$isLoggedIn): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="register.php">Register</a>
                                    </li>
                                <?php endif; ?>
                                <?php if (!$isLoggedIn): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                    <?php endif; ?>
                                <?php if ($isLoggedIn): ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-person-fill"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                
                                <!-- Cart Button with Icon -->
                                <li class="nav-item">
                                    <a class="nav-link" href="cart.php">
                                        <i class="fas fa-shopping-cart"></i>
                                        <!-- Optional: Display item count -->
                                        <?php if (isset($_SESSION['cart_count']) && $_SESSION['cart_count'] > 0): ?>
                                            <span class="badge bg-warning text-dark"><?php echo $_SESSION['cart_count']; ?></span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>