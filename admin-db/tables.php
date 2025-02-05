<?php 
include "db_connect.php"; 
$query=mysqli_query ($kon, "SELECT KK_KEL.*, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), TGL_LAHIR)), '%Y') + 0 AS USIA, KK_MAIN.NAMA_KK, KK_MAIN.RT, KK_MAIN.RW FROM KK_KEL LEFT JOIN KK_MAIN ON KK_KEL.NO_KK = KK_MAIN.NO_KK ORDER BY NAMA_KK")or die (mysqli_error()); 
$jumlah = mysqli_num_rows($query); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kepala Keluarga Padukuhan Tritis</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img height=30 src="img/kab-kulonprogo.svg" alt="...">
                </div>
                <div class="sidebar-brand-text mx-3">Padukuhan Tritis</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Halaman
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel</span></a>
            </li>

            <!-- Nav Item - Form -->
            <li class="nav-item">
                <a class="nav-link" href="add_kk.php">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Formulir</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>

                    <!-- Tabel -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Kepala Keluarga Padukuhan Tritis</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>  
                                            <th>Nomor Kartu Keluarga</th>         
                                            <th>Nama Kepala Keluarga</th>         
                                            <th>Nama Anggota Keluarga</th>
                                            <th>NIK</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Usia</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Golongan Darah</th>
                                            <th>Agama</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Pekerjaan</th>
                                            <th>Status Perkawinan</th>
                                            <th>Status Hubungan Keluarga</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>RT</th>
                                            <th>RW</th>
                                            <th >Ubah?</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $j=0; 
                                        while ($row=mysqli_fetch_array($query)) {     
                                        echo "<tr><td>";
                                        echo $j+1;
                                        echo"</td>";     
                                        echo "<td>";
                                        echo $row["NO_KK"];
                                        echo"</td>";  
                                        echo "<td>";
                                        echo $row["NAMA_KK"];
                                        echo"</td>";     
                                        echo"<td>";
                                        echo $row["NAMA_ANGGOTA"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["NIK"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["TGL_LAHIR"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["USIA"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["JENIS_KELAMIN"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["GOL_DARAH"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["AGAMA"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["PEND_TERAKHIR"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["PEKERJAAN"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["STATUS_KAWIN"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["STATUS_HUB_KEL"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["KEWARGANEGARAAN"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["NAMA_AYAH"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["NAMA_IBU"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["RT"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo $row["RW"];
                                        echo"</td>";
                                        echo"<td>";
                                        echo "<a href='delete.php?NIK=".$row['NIK']."' style=\"text-decoration: none\" title=\"Hapus\" onclick=\"return confirm('Hapus record ini?')\"><font face='tahoma'>Hapus</font></a><br><a href='edit.php?NIK=".$row['NIK']."' style=\"text-decoration: none\" title=\"Edit\">Edit</a></tr>";
                                        $j++; }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Padukuhan Tritis 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>
</html>