<?php
include('includes/dbcon.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // password_verify($inputPassword, $hashedPassword) to check if stored password is correct or not

    $check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con,$check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION["status"] = "Email ID already exists";
        header("Location: register.php");
    } else {
        $query = "INSERT INTO users (name,phone,email,password) VALUES ('$name','$phone','$email','$hashedPassword')";
        $query_run = mysqli_query($con,$query);

        if ($query_run) {
            $_SESSION["status"] = "Registration Successful!";
            header("Location: register.php");
        } else {
            $_SESSION["status"] = "Registration Failed!";
            header("Location: register.php");
        }
    }
}

?>