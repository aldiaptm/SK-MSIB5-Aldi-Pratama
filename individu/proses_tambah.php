<?php
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_varian = $_POST['nama_varian'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $jenis_kue_id = $_POST['jenis_kue_id'];
    $supplier_id = $_POST['supplier_id'];
    $created_at = date('Y-m-d H:i:s');

    // Upload Proses
    $target_dir = "image/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["gambar_kue"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["gambar_kue"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["gambar_kue"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }


    $result = mysqli_query($conn, "INSERT INTO varian_kue (nama_varian, gambar_kue, harga, deskripsi, stok, jenis_kue_id, supplier_id, created_at) VALUES ('$nama_varian', '$target_file', '$harga', '$deskripsi', '$stok', '$jenis_kue_id', '$supplier_id', '$created_at')");
}
header("Location:admin-fix.php");
?>