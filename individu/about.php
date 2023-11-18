<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: transparent;
            font-weight: bold;
        }

        body {
            background-image: url("image/bg-about.jpg");
            text-align: center;
        }

        h3 {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }

        img {
            width: 400px;
            border-radius: 5%;
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
        <a class="navbar-brand" href="index.php"><img src="image/logo-kue.png" alt=""
                style="width: 60px !important; height: 40px !important;"><strong>KUE SARIRASA</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
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
    <h2 style="margin-top: 30px; margin-bottom: 50px; margin-left: 100px;">SEKILAS TENTANG DEVELOPER
    </h2>
    <div class="container mt-5 d-flex">
        <div class="col-6 p-5">
            <img src="image/about1.jpeg" alt="">
        </div>
        <div class="col-6 p-5">
            <h3>Aldi Pratama</h3><br>
            <p>Saya merupakan seorang Mahasiswa Semester 7 yang sedang mengikuti program MSIB Batch-5 di Mitra PT.
                Talenta Sinergi Group (Eduwork).</p><br>
            <p>Saya memiliki hobi berolahraga, baik itu GYM, Badminton, Volly, Basket, atau pun Sepak Bola.</p><br>
            <p>Saya tidak memiliki hobi di bidang per-codingan, aneh bukan?</p><br>
            <p>Mungkin terdengar sedikit aneh karena saya masuk ke jurusan Sistem Informasi, dimana 70% mata kuliahnya
                merupakan "ngoding". Tapi jika diceritakan mungkin akan menjadi sebuah buku, karena alur cerita yang
                sangat panjang.</p><br>
            <p>Tapi dibalik kesalahan ini ada hikmahnya, yaitu saya dapat bertemu dengan seorang perempuan yang kini
                menjadi kekasih hati saya.</p>
        </div>
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            ©Copyright|Aldi Pratama
        </div>
    </footer>
</body>

</html>