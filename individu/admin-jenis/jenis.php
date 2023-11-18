<!DOCTYPE html>
<html>

<head>
    <title>Admin Jenis Kue</title>
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
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            background-color: darkgray !important;
            width: 200px !important;
        }

        body {
            background-image: url("../image/bg-admin3.jpg") !important;
        }

        footer {
            background-color: transparent !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <aside class="main-sidebar sidebar-light-primary elevation-4"
            style="position: fixed; top: 0; left: 0; bottom: 0;">
            <img src="../image/gambar-profile.jpg" alt=""
                style="width: 100px; border-radius: 100%; margin-left: 40px; margin-top: 20px;"><br><br>
            <span class="brand-text font-weight-light" style="font-size: 22px; margin-left: 22px;">Admin
                Sarirasa</span>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="../admin-fix.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jenis.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Jenis Kue</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin-supplier/supplier.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Supplier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../about.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>About</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="container" style="width: 75%; margin-left: 240px;">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    include '../koneksi.php';
                    $query = mysqli_query($conn, "SELECT * FROM jenis_kue;");
                    ?>
                    <p style="font-size: 20px; margin-top: 70px;"><strong>Data Jenis Kue</strong></p><br>
                    <a class="btn btn-info" style="margin-bottom:10px; margin-top:-10px" href="tambah.php"> Tambah Jenis
                        Kue
                    </a>
                    <table id="datatabel" class="table table-bordered" style="">
                        <thead>
                            <tr style="text-align: center;">
                                <th>
                                    Jenis Kue ID
                                </th>
                                <th>
                                    Jenis Kue
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
                                            <?php echo $data["jenis_kue_id"] ?>
                                        </td>
                                        <td>
                                            <?php echo $data["nama_jenis"] ?>
                                        </td>
                                        <td> <a href="hapus.php?jenis_kue_id=<?php echo $data["jenis_kue_id"] ?>"
                                                class="label label-danger"> Delete
                                            </a>
                                            &nbsp; <a href="edit.php?jenis_kue_id=<?php echo $data["jenis_kue_id"] ?>"
                                                class="label label-warning"> Ubah
                                            </a>
                                        </td>
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
                ©Copyright|Aldi Pratama
            </div>
        </footer>
    </div>
    <!-- <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script> -->
    <script>
        $(document).ready(function () {
            $('#datatabel').DataTable();
        });
    </script>
</body>

</html>