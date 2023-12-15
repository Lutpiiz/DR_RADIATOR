<?php
session_start(); 
include("config.php");

$email = $_POST['txtEmail']; 
$password = $_POST['txtPassword'];

$sql = "SELECT email FROM admin 
        WHERE email='$email'
        AND password='$password'";

$hasil = mysqli_query($config, $sql) or exit("Error query : <b>".$sql."</b>.");

    if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['email'] = $data['email'];
        header("Location:index.html");
        exit();

    } else { ?>
        <h2>Maaf...</h2>
        <p> Username atau password salah. Klik <a href="login.php">disini</a> untuk kembali login. </p> <?php
    }
?>