<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("config.php");

    // Get user input
    $username = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];

    if (empty($username) || empty($email) || empty($password)) {

        header("Location: /FP_PWL/admin/register.php?error=emptyfields");
        exit();
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        if ($conn->query($sql) == TRUE) {

            header("Location: /FP_PWL/admin/login.php?registration=success");
            exit();
        } else {
            header("Location: /FP_PWL/admin/register.php?error=databaseerror");
            exit();
        }
    }
} else {
    header("Location: /FP_PWL/admin/register.php");
    exit();
}
