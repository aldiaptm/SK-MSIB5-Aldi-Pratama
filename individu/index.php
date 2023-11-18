<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <!-- Bootstrap CSS -->
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

    img {
      width: 150px !important;
      height: 150px;
      border-radius: 50% !important;
    }

    .card {
      border: 0px;
      margin-bottom: 20px;
    }

    h1 {
      margin-bottom: 50px;
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
  <!-- Navbar -->
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

  <!-- Content -->
  <div class="container mt-5 pl-5 pr-5">
    <h1>Macam-macam Kue Sarirasa</h1>
    <div class="row">
      <?php
      include 'halaman.php';

      $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
      $productsPerPage = 3;

      getProductsWithPagination($currentPage, $productsPerPage);
      ?>
    </div>
    <div class="pagination justify-content-center">
      <center>
        <?php
        displayPagination($productsPerPage);
        ?>
      </center>
    </div>
    <p><strong>Produk yang kami sajikan, merupakan kualitas terbaik dari yang terbaik. Supplier yang memasukkan kepada
        kami,
        merupakan supplier terpilih dari beberapa supplier yang ingin memasukkan produknya kepada kami.</strong></p>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<footer>
  <div class="footer">©Copyright|Aldi Pratama
  </div>
</footer>

</html>