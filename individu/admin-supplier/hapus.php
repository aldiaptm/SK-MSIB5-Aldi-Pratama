<?php 
include '../koneksi.php';
$result = mysqli_query($conn, "DELETE from supplier where `supplier_id` = '$_GET[supplier_id]'");

header("Location:supplier.php");

?>