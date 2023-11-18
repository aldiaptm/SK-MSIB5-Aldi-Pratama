<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email = $_POST['email'];

    $result = mysqli_query($conn, "INSERT INTO supplier (nama_supplier, alamat_supplier, nomor_telepon, email) VALUES ('$nama_supplier', '$alamat_supplier', '$nomor_telepon', '$email')");
}
header("Location:supplier.php");
?>