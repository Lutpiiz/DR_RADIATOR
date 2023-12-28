<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("config.php");

    $username = $_POST['txtName'];
    $telepon = $_POST['txtTelepon'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    if (empty($username) || empty($telepon) || empty($email) || empty($password)) {
        header("Location: register.php?error=emptyfields");
        exit();
    } else {
        // Menggunakan parameterized query untuk menghindari serangan SQL Injection
        $sql = "INSERT INTO user (id, username, telepon, email, password) VALUES (NULL, ?, ?, ?, ?)";
        $stmt = $config->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssss", $username, $telepon, $email, $password);
            if ($stmt->execute()) {
                $stmt->close();
                echo "<script>
                    alert('Registrasi berhasil, silahkan login.')
                    window.location.href = 'login.php';
                  </script>";
                exit();
            } else {
                header("Location: register.php?error=databaseerror");
                exit();
            }
        } else {
            header("Location: register.php?error=sqlerror");
            exit();
        }
    }
} else {
    header("Location: register.php");
    exit();
}
?>
