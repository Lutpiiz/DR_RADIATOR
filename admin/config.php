<?php 
$conn = mysqli_connect("localhost", "root", "","dr_radiator");
if(!$conn){
    die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
}
?>