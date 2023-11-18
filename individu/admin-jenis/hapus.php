<?php 
include '../koneksi.php';
$result = mysqli_query($conn, "DELETE from jenis_kue where `jenis_kue_id` = '$_GET[jenis_kue_id]'");

header("Location:jenis.php");

?>