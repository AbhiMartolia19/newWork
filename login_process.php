<?php
include('includes/dbcon.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_email_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $user_data = mysqli_fetch_assoc($check_email_query_run);
        $stored_hashed_password = $user_data['password'];
        $userID = $user_data['user_id'];
        $role = $user_data['role'];

        // Verify the entered password with the stored hashed password
        if (password_verify($password, $stored_hashed_password)) {
            // Password matches
            $_SESSION["status"] = "Login Successful";
            $_SESSION["logged_in"] = true;  // Set logged_in to true
            $_SESSION['registered'] = false;
            $_SESSION['current_user'] = $userID;
            if ($role == 'admin') {
                $_SESSION['is_admin'] = true;
            }
            header("Location: index.php");  // Redirect after successful login
            exit();
        } else {
            // Password does not match
            $_SESSION["status"] = "Incorrect password!";
            header("Location: login.php");
            exit();
        }
    } else {
        // No user found with the given email
        $_SESSION["status"] = "No such user exists!";
        header("Location: login.php");
        exit();
    }
}
?>
