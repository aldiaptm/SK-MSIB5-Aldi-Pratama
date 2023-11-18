<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kue</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script>
        function validateForm() {
            var nama_supplier = document.getElementById("nama_supplier").value;
            var alamat_supplier = document.getElementById("alamat_supplier").value;
            var nomor_telepon = document.getElementById("nomor_telepon").value;
            var email = document.getElementById("email").value;

            if (nama_supplier.trim() === '' || alamat_supplier.trim() === '' || nomor_telepon.trim() === '' || email.trim() === '') {
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
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <a class="btn btn-success" style="margin-bottom:5px; margin-top:20px;" href="supplier.php"> HOME </a>
                <h1 style="margin-bottom:5px">Tambah Data Supplier</h1>
                <?php
                include '../koneksi.php';
                ?>
                <form style="margin-top: 20px" action="proses_tambah.php" method="post" enctype="multipart/form-data"
                    onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="nama_supplier">Nama:</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
                    </div>
                    <div class="form-group">
                        <label for="alamat_supplier">Alamat:</label>
                        <input type="text" class="form-control" id="alamat_supplier" name="alamat_supplier">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Telepon:</label>
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>