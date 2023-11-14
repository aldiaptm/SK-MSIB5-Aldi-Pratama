<?php
include 'koneksi.php';

if (isset($_GET['varian_kue_id'])) {
    $varian_kue_id = $_GET['varian_kue_id'];

    $query = "SELECT * FROM varian_kue WHERE varian_kue_id = $varian_kue_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Detail Produk</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>

        <body>
            <div class="container mt-5">
                <h1 style="text-align: center; margin-bottom: 100px;">Detail Product</h1>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 300px; height: 300px; border-radius: 20%" src="<?php echo $data['gambar_kue']; ?>" class="img-fluid"
                            alt="<?php echo $data['nama_varian']; ?>">
                    </div>
                    <div class="col-md-6">
                        <h2>
                            <?php echo $data['nama_varian']; ?>
                        </h2>
                        <p>Harga: Rp.
                            <?php echo $data['harga']; ?>
                        </p>
                        <p>
                            <?php echo $data['deskripsi']; ?>
                        </p>
                    </div>
                </div>
                <center>
                    <a class="btn btn-success" style="margin-bottom:5px; margin-top:20px;" href="index.php"> Kembali
                    </a>
                </center>
            </div>
        </body>

        </html>
        <?php
    } else {
        echo "Produk tidak ditemukan.";
    }
} else {
    echo "ID Produk tidak tersedia.";
}
?>