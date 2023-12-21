<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("config.php");

    // Get user input
    $username = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];

    if (empty($username) || empty($email) || empty($password)) {

        header("Location: register.php?error=emptyfields");
        exit();
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        if ($conn->query($sql) == TRUE) {

            header("Location: login.php?registration=success");
            exit();
        } else {
            header("Location: register.php?error=databaseerror");
            exit();
        }
    }
} else {
    header("Location: register.php");
    exit();
}
