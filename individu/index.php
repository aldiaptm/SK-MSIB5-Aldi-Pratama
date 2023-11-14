<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    .navbar {
      background-color: lightcyan;
    }

    body {
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

    .pagination {
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><strong>KUE SARIRASA</strong></a>
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
          <a class="nav-link" href="#">Services</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-5 pl-5 pr-5">
    <h1>Macam-macam Kue Sarirasa</h1>
    <div class="row">
      <?php
      include 'halaman.php'; // Panggil file halaman.php
      
      // Panggil fungsi getProductsWithPagination dan displayPagination di sini
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
  </div>

  <!-- Bootstrap JavaScript and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>