<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <style>
        aside {
            position: fixed; top: 0; left: 0; bottom: 0;
            background-color: lightcyan !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Kiri Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-light-primary elevation-4"
            style="position: fixed; top: 0; left: 0; bottom: 0;">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light" style="font-size: 25px;">Admin Sarirasa</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>About</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="container" style="width: 75%; margin-left: 280px;">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($conn, "SELECT c.varian_kue_id, c.nama_varian, c.gambar_kue, c.harga, c.deskripsi, c.stok, j.nama_jenis, s.nama_supplier from varian_kue as c JOIN jenis_kue as j on c.jenis_kue_id=j.jenis_kue_id join supplier as s on c.supplier_id=s.supplier_id ORDER BY created_at DESC;");
                    ?>
                    <center>
                    </center>
                    <p style="font-size: 20px;"><strong>Data Kue Sarirasa</strong></p><br>
                    <a class="btn btn-info" style="margin-bottom:10px; margin-top:-10px" href="tambah.php"> Tambah Kue
                    </a>
                    <table id="hadeuh" class="table table-bordered" style="">
                        <thead>
                            <tr style="text-align: center;">
                                <th>
                                    Varian
                                </th>
                                <th style="width: 200px;">
                                    Gambar
                                </th>
                                <th>
                                    Harga
                                </th>
                                <th>
                                    Deskripsi
                                </th>
                                <th>
                                    Stok
                                </th>
                                <th>
                                    Jenis Kue
                                </th>
                                <th>
                                    Supplier
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $data["nama_varian"] ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo $data['gambar_kue']; ?>" class="card-img-top"
                                                style="width: 200px;">
                                        </td>
                                        <td>
                                            <?php echo $data["harga"] ?>
                                        </td>
                                        <td>
                                            <?php echo $data["deskripsi"] ?>
                                        </td>
                                        <td>
                                            <?php echo $data["stok"] ?>
                                        </td>
                                        <td>
                                            <?php echo $data["nama_jenis"] ?>
                                        </td>
                                        <td>
                                            <?php echo $data["nama_supplier"] ?>
                                        </td>
                                        <td> <a href="hapus.php?varian_kue_id=<?php echo $data["varian_kue_id"] ?>"
                                                class="label label-danger"> Delete
                                            </a>
                                            &nbsp; <a href="edit.php?varian_kue_id=<?php echo $data["varian_kue_id"] ?>"
                                                class="label label-warning"> Ubah
                                            </a></td>
                                    </tr>

                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                AdminLTE ALDI
            </div>
        </footer>
    </div>
    <!-- <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script> -->
    <script>
        $(document).ready(function () {
            $('#hadeuh').DataTable();
        });
    </script>
</body>

</html>