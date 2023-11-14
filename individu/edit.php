<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script>
        function validateForm() {
            var nama_varian = document.getElementById("nama_varian").value;
            var harga = document.getElementById("harga").value;
            var stok = document.getElementById("stok").value;
            var deskripsi = document.getElementById("deskripsi").value;

            if (nama_varian.trim() === '' || harga.trim() === '' || stok.trim() === '' || deskripsi.trim() === '') {
                alert("Harap isi semua kolom!");
                return false;
            } else {
                alert("Data Berhasil Ditambahkan");
                return true;
            }
        }
    </script>
    <style>
        body {
            padding: 20px;
            background-color: lightcyan;
        }
    </style>
</head>

<body>
    <div class="container" style="width: 500px;">
        <div class="row">
            <div class="col-sm-12">
                <a class="btn btn-success" style="margin-bottom:5px; margin-top:20px;" href="admin-fix.php"> HOME
                </a><br><br>
                <?php
                include 'koneksi.php';
                date_default_timezone_set('Asia/Jakarta');

                if (isset($_GET['varian_kue_id'])) {
                    $varian_kue_id = $_GET['varian_kue_id'];
                    $query = mysqli_query($conn, "SELECT * FROM varian_kue WHERE varian_kue_id = $varian_kue_id");

                    if (mysqli_num_rows($query) > 0) {
                        $varian_kue = mysqli_fetch_assoc($query);
                    } else {
                        echo "Produk tidak ditemukan.";
                        exit;
                    }
                } else {
                    echo "ID Produk tidak ditemukan.";
                    exit;
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nama_varian = $_POST['nama_varian'];
                    $harga = $_POST['harga'];
                    $stok = $_POST['stok'];
                    $deskripsi = $_POST['deskripsi'];
                    $updated_at = date('Y-m-d H:i:s');

                    $update_query = "UPDATE varian_kue SET nama_varian='$nama_varian', harga='$harga', stok='$stok', deskripsi='$deskripsi', updated_at='$updated_at' WHERE varian_kue_id = $varian_kue_id";
                    $update_result = mysqli_query($conn, $update_query);

                    header("Location:admin-fix.php");
                }
                ?>

                <h1>Edit Produk</h1>
                <form method="post" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="nama_varian">Varian:</label>
                        <input type="text" class="form-control" id="nama_varian" name="nama_varian"
                            value="<?php echo $varian_kue['nama_varian']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga:</label>
                        <input type="text" class="form-control" id="harga" name="harga"
                            value="<?php echo $varian_kue['harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok:</label>
                        <input type="text" class="form-control" id="stok" name="stok"
                            value="<?php echo $varian_kue['stok']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                            value="<?php echo $varian_kue['deskripsi']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>