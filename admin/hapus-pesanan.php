<?php 
include "config.php";
$id_jasa = $_GET['id'];

$sql = "DELETE FROM pesanan WHERE id = '$id_jasa'";
$hasil = mysqli_query($conn, $sql);

echo "<script> alert ('Data Berhasil Dihapus')</script>";
header("location:data-pesanan.php");
?>