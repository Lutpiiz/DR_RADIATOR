<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("config.php");  // Assuming this is your database connection file

    // Get user input
    $username = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];

    // Validate input (add more validation as needed)
    if (empty($username) || empty($email) || empty($password)) {
        // Handle validation error, redirect back to registration page with an error message
        header("Location: register.php?error=emptyfields");
        exit();
    } else {
        // Hash the password (for security)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert the user into the database
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        if ($conn->query($sql) == TRUE) {
            // After successful registration, you can redirect the user to the login page
            header("Location: login.php?registration=success");
            exit();
        } else {
            // Handle database error, redirect back to registration page with an error message
            header("Location: register.php?error=databaseerror");
            exit();
        }
    }
} else {
    // If the user tries to access this script without submitting the form, redirect them to the registration page
    header("Location: register.php");
    exit();
}
?>
