<?php 
$config = mysqli_connect("localhost", "root", "","dr_radiator");
if(!$config){
    die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
}
?>