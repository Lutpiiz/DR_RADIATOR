<?php
session_start(); 
include("config.php");

$email = $_POST['txtEmail']; 
$password = $_POST['txtPassword'];

$sql = "SELECT * FROM user 
        WHERE email='$email'
        AND password='$password'";

$hasil = mysqli_query($conn, $sql) or exit("Error query : <b>".$sql."</b>.");

    if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['email'] = $data['email'];
        $_SESSION['username'] = $data['username'];
        header("Location:index.php");
        exit();

    } else { ?>
        <script>
            alert('Login gagal. Email atau password salah.')
            window.location.href = "login.php";
        </script>

        <?php
    }
?>