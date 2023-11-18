<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script>
        function validateForm() {
            var nama_supplier = document.getElementById("nama_supplier").value;
            var alamat_supplier = document.getElementById("alamat_supplier").value;
            var nomor_telepon = document.getElementById("nomor_telepon").value;
            var email = document.getElementById("email").value;

            if (nama_supplier.trim() === '' || alamat_supplier.trim() === '' || nomor_telepon.trim() === '' || email.trim() === '' || ) {
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
                <a class="btn btn-success" style="margin-bottom:5px; margin-top:20px;" href="supplier.php"> HOME
                </a><br><br>
                <?php
                include '../koneksi.php';

                if (isset($_GET['supplier_id'])) {
                    $supplier_id = $_GET['supplier_id'];
                    $query = mysqli_query($conn, "SELECT * FROM supplier WHERE supplier_id = $supplier_id");

                    if (mysqli_num_rows($query) > 0) {
                        $supplier = mysqli_fetch_assoc($query);
                    } else {
                        echo "Produk tidak ditemukan.";
                        exit;
                    }
                } else {
                    echo "ID Produk tidak ditemukan.";
                    exit;
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nama_supplier = $_POST['nama_supplier'];
                    $alamat_supplier = $_POST['alamat_supplier'];
                    $nomor_telepon = $_POST['nomor_telepon'];
                    $email = $_POST['email'];

                    $update_query = "UPDATE supplier SET nama_supplier='$nama_supplier', alamat_supplier='$alamat_supplier', nomor_telepon='$nomor_telepon', email='$email' WHERE supplier_id = $supplier_id";
                    $update_result = mysqli_query($conn, $update_query);

                    header("Location:supplier.php");
                }
                ?>

                <h1>Edit Jenis</h1>
                <form method="post" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier:</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier"
                            value="<?php echo $supplier['nama_supplier']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat_supplier">Alamat:</label>
                        <input type="text" class="form-control" id="alamat_supplier" name="alamat_supplier"
                            value="<?php echo $supplier['alamat_supplier']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon:</label>
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                            value="<?php echo $supplier['nomor_telepon']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?php echo $supplier['email']; ?>">
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