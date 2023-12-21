<?php
session_start();

if (isset($_SESSION['user'])) {
    $_SESSION = array();
    session_destroy();
    header("Location:/FP_PWL/login.php");
    exit();
} else {
    header("Location:/FP_PWL/login.php");
    exit();
}
