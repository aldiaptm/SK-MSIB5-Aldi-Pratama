<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script>
        function validateForm() {
            var nama_jenis = document.getElementById("nama_jenis").value;

            if (nama_jenis.trim() === '') {
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
                <a class="btn btn-success" style="margin-bottom:5px; margin-top:20px;" href="jenis.php"> HOME
                </a><br><br>
                <?php
                include '../koneksi.php';

                if (isset($_GET['jenis_kue_id'])) {
                    $jenis_kue_id = $_GET['jenis_kue_id'];
                    $query = mysqli_query($conn, "SELECT * FROM jenis_kue WHERE jenis_kue_id = $jenis_kue_id");

                    if (mysqli_num_rows($query) > 0) {
                        $jenis_kue = mysqli_fetch_assoc($query);
                    } else {
                        echo "Produk tidak ditemukan.";
                        exit;
                    }
                } else {
                    echo "ID Produk tidak ditemukan.";
                    exit;
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nama_jenis = $_POST['nama_jenis'];

                    $update_query = "UPDATE jenis_kue SET nama_jenis='$nama_jenis' WHERE jenis_kue_id = $jenis_kue_id";
                    $update_result = mysqli_query($conn, $update_query);

                    header("Location:jenis.php");
                }
                ?>

                <h1>Edit Jenis</h1>
                <form method="post" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="nama_jenis">Nama Jenis:</label>
                        <input type="text" class="form-control" id="nama_jenis" name="nama_jenis"
                            value="<?php echo $jenis_kue['nama_jenis']; ?>">
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