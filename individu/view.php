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
            <style>
                .navbar {
                    background-color: transparent;
                    font-weight: bold;
                }

                body {
                    background-image: url("image/bg-image5.jpg");
                    text-align: center;
                }

                footer {
                    position: static;
                    background-color: transparent;
                    font-size: 13px;
                    font-weight: 100;
                }
            </style>
        </head>

        <body>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="image/logo-kue.png" alt=""
                        style="width: 60px !important; height: 40px !important;"><strong>KUE SARIRASA</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Service</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container mt-5">
                <h1 style="text-align: center; margin-bottom: 100px;">Detail Product</h1>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 300px; height: 300px; border-radius: 20%" src="<?php echo $data['gambar_kue']; ?>"
                            class="img-fluid" alt="<?php echo $data['nama_varian']; ?>">
                    </div>
                    <div class="col-md-6">
                        <strong>
                            <h2>
                                <?php echo $data['nama_varian']; ?>
                            </h2>
                            <p>Harga: Rp.
                                <?php echo $data['harga']; ?>
                            </p>
                            <p>
                                <?php echo $data['deskripsi']; ?>
                            </p>
                        </strong>
                    </div>
                </div>
                <center>
                    <a class="btn btn-success" style="margin-bottom:5px; margin-top:20px;" href="index.php"> Kembali
                    </a>
                </center>
            </div>
        </body>
        <footer>
            <div class="footer">©Copyright|Aldi Pratama
            </div>
        </footer>

        </html>
        <?php
    } else {
        echo "Produk tidak ditemukan.";
    }
} else {
    echo "ID Produk tidak tersedia.";
}
?>