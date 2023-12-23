<?php 
include "config.php";
$id_barang = $_GET['id'];

$sql = "DELETE FROM barang WHERE id = '$id_barang'";
$hasil = mysqli_query($conn, $sql);

echo "<script> alert ('Data Berhasil Dihapus')</script>";
header("location:index.php");
?>