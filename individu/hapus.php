<?php 
include 'koneksi.php';
$result = mysqli_query($conn, "DELETE from varian_kue where `varian_kue_id` = '$_GET[varian_kue_id]'");

header("Location:admin-fix.php");

?>