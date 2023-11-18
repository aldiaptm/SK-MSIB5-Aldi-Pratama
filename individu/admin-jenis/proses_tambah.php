<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_jenis = $_POST['nama_jenis'];

    $result = mysqli_query($conn, "INSERT INTO jenis_kue (nama_jenis) VALUES ('$nama_jenis')");
}
header("Location:jenis.php");
?>