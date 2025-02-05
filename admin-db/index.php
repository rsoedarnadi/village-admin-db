<?php
include "db_connect.php"; 
$query1=mysqli_query($kon, "SELECT TIMESTAMPDIFF(YEAR, TGL_LAHIR, CURDATE()) AS USIA, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY USIA ORDER BY USIA ASC;") or die (mysqli_error());
$query2=mysqli_query($kon, "SELECT TIMESTAMPDIFF(YEAR, TGL_LAHIR, CURDATE()) AS USIA, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY USIA ORDER BY USIA ASC;") or die (mysqli_error());
$query3=mysqli_query($kon, "SELECT COUNT(NO_KK) as COUNT from KK_MAIN") or die (mysqli_error());
$query4=mysqli_query($kon, "SELECT COUNT(NIK) as COUNT from KK_KEL") or die (mysqli_error());
$query5=mysqli_query($kon, "SELECT COUNT(NIK) as COUNT from KK_KEL WHERE JENIS_KELAMIN='L'") or die (mysqli_error());
$query6=mysqli_query($kon, "SELECT COUNT(NIK) as COUNT from KK_KEL WHERE JENIS_KELAMIN='P'") or die (mysqli_error());
$query7=mysqli_query($kon, "SELECT GOL_DARAH, COUNT(NIK) AS COUNT FROM KK_KEL where GOL_DARAH IS NOT NULL AND GOL_DARAH <> 'TIDAK TAHU' GROUP BY GOL_DARAH ORDER BY GOL_DARAH ASC") or die (mysqli_error());
$query8=mysqli_query($kon, "SELECT GOL_DARAH, COUNT(NIK) AS COUNT FROM KK_KEL where GOL_DARAH IS NOT NULL AND GOL_DARAH <> 'TIDAK TAHU' GROUP BY GOL_DARAH ORDER BY GOL_DARAH ASC") or die (mysqli_error());
$query9=mysqli_query($kon, "SELECT PEND_TERAKHIR, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY PEND_TERAKHIR ORDER BY COUNT DESC") or die (mysqli_error());
$query10=mysqli_query($kon, "SELECT PEND_TERAKHIR, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY PEND_TERAKHIR ORDER BY COUNT DESC") or die (mysqli_error());
$query11=mysqli_query($kon, "SELECT PEKERJAAN, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY PEKERJAAN ORDER BY COUNT DESC") or die (mysqli_error());
$query12=mysqli_query($kon, "SELECT PEKERJAAN, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY PEKERJAAN ORDER BY COUNT DESC") or die (mysqli_error());
$query13=mysqli_query($kon, "SELECT STATUS_KAWIN, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY STATUS_KAWIN ORDER BY STATUS_KAWIN ASC") or die (mysqli_error());
$query14=mysqli_query($kon, "SELECT STATUS_KAWIN, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY STATUS_KAWIN ORDER BY STATUS_KAWIN ASC") or die (mysqli_error());
$query15=mysqli_query($kon, "SELECT RW, COUNT(NO_KK) AS COUNT FROM KK_MAIN WHERE RW IS NOT NULL GROUP BY RW") or die (mysqli_error());
$query16=mysqli_query($kon, "SELECT RW, COUNT(NO_KK) AS COUNT FROM KK_MAIN WHERE RW IS NOT NULL GROUP BY RW") or die (mysqli_error());
$query17=mysqli_query($kon, "SELECT RW, COUNT(NIK) AS COUNT FROM KK_KEL LEFT JOIN KK_MAIN ON KK_KEL.NO_KK = KK_MAIN.NO_KK WHERE STATUS_HUB_KEL <> 'KEPALA KELUARGA' AND RW IS NOT NULL GROUP BY RW") or die (mysqli_error());
$query18=mysqli_query($kon, "SELECT RT, COUNT(NO_KK) AS COUNT FROM KK_MAIN GROUP BY RT") or die (mysqli_error());
$query19=mysqli_query($kon, "SELECT RT, COUNT(NO_KK) AS COUNT FROM KK_MAIN GROUP BY RT") or die (mysqli_error());
$query20=mysqli_query($kon, "SELECT RT, COUNT(NIK) AS COUNT FROM KK_KEL LEFT JOIN KK_MAIN ON KK_KEL.NO_KK = KK_MAIN.NO_KK WHERE STATUS_HUB_KEL <> 'KEPALA KELUARGA' GROUP BY RT") or die (mysqli_error());
// // KK BY RW
// SELECT RW, COUNT(NO_KK) AS COUNT FROM KK_MAIN WHERE RW IS NOT NULL GROUP BY RW;
// // PENDUDUK BY RW
// SELECT RW, COUNT(NIK) AS COUNT FROM KK_KEL LEFT JOIN KK_MAIN ON KK_KEL.NO_KK = KK_MAIN.NO_KK WHERE STATUS_HUB_KEL <> 'KEPALA KELUARGA' AND RW IS NOT NULL GROUP BY RW;
// // KK BY RT
// SELECT RT, COUNT(NO_KK) AS COUNT FROM KK_MAIN GROUP BY RT;
// // PENDUDUK BY RT
// SELECT RT, COUNT(NIK) AS COUNT FROM KK_KEL LEFT JOIN KK_MAIN ON KK_KEL.NO_KK = KK_MAIN.NO_KK WHERE STATUS_HUB_KEL <> 'KEPALA KELUARGA' GROUP BY RT;
$kk=mysqli_fetch_array($query3);
$pen=mysqli_fetch_array($query4);
$lk=mysqli_fetch_array($query5);
$pr=mysqli_fetch_array($query6);
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah KK</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($kk["COUNT"])?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-home fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Penduduk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($pen["COUNT"])?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Penduduk Laki-laki
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php print_r($lk["COUNT"])?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Penduduk Perempuan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($pr["COUNT"])?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-female fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk Berdasarkan Usia</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div height="15">
                                        <canvas id="myChart1"></canvas>
                                    </div>
                                </div>
                            </div>


                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk Berdasarkan Tingkat Pendidikan</h6>
                                </div>
                                <div class="card-body">
                                    <div height="15">
                                        <canvas id="myChart3"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk Berdasarkan Pekerjaan</h6>
                                </div>
                                <div class="card-body">
                                    <div height="15">
                                        <canvas id="myChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk Berdasarkan Rukun Warga</h6>
                                </div>
                                <div class="card-body">
                                    <div height="15">
                                        <canvas id="myChart6"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk Berdasarkan Golongan Darah</h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myChart2"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> A
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> B
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> O
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-secondary"></i> AB
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk Berdasarkan Status Perkawinan</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myChart5"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> BELUM KAWIN
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> KAWIN
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> CERAI MATI
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-secondary"></i> CERAI HIDUP
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Penduduk Berdasarkan Rukun Tetangga</h6>
                                </div>
                                <div class="card-body">
                                    <div height="15">
                                        <canvas id="myChart7"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
</body>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
            var ctx1 = document.getElementById("myChart1");
            var myChart1 = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: [<?php while ($a = mysqli_fetch_array($query1)) { echo '"' . $a['USIA'] . '",';}?>],
                    datasets: [{
                            data: [<?php while ($a = mysqli_fetch_array($query2)) { echo '"' . $a['COUNT'] . '",';}?>],
                            backgroundColor: "#4e73df",
                            hoverBackgroundColor: "#2e59d9",
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1
                                },
                                title: {
                                display: true,
                                text: 'axis title'
                            }
                            }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.yLabel;
           }
        }
    }
                }
            });

    </script>
    <script>
        // Pie Chart Example
        var ctx2 = document.getElementById("myChart2");
        var myChart2 = new Chart(ctx2, {
          type: 'doughnut',
          data: {
            labels: [<?php while ($b = mysqli_fetch_array($query7)) { echo '"' . $b['GOL_DARAH'] . '",';}?>],
            datasets: [{
              data: [<?php while ($b = mysqli_fetch_array($query8)) { echo '"' . $b['COUNT'] . '",';}?>],
              backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#858796'],
              hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#777a8a'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });
    </script>
    <script>
            var ctx3 = document.getElementById("myChart3");
            var myChart3 = new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: [<?php while ($c = mysqli_fetch_array($query9)) { echo '"' . $c['PEND_TERAKHIR'] . '",';}?>],
                    datasets: [{
                            data: [<?php while ($c = mysqli_fetch_array($query10)) { echo '"' . $c['COUNT'] . '",';}?>],
                            backgroundColor: "#858796",
                            hoverBackgroundColor: "#777a8a",
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1
                                },
                                title: {
                                display: true,
                                text: 'axis title'
                            }
                            }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.yLabel;
           }
        }
    }
                }
            });
    </script>
<script>
            var ctx4 = document.getElementById("myChart4");
            var myChart4 = new Chart(ctx4, {
                type: 'bar',
                data: {
                    labels: [<?php while ($d = mysqli_fetch_array($query11)) { echo '"' . $d['PEKERJAAN'] . '",';}?>],
                    datasets: [{
                            data: [<?php while ($d = mysqli_fetch_array($query12)) { echo '"' . $d['COUNT'] . '",';}?>],
                            backgroundColor: "#1cc88a",
                            hoverBackgroundColor: "#19b27b",
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1
                                },
                                title: {
                                display: true,
                                text: 'axis title'
                            }
                            }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.yLabel;
           }
        }
    }
                }
            });
    </script>
    <script>
        // Pie Chart Example
        var ctx5 = document.getElementById("myChart5");
        var myChart5 = new Chart(ctx5, {
          type: 'doughnut',
          data: {
            labels: [<?php while ($e = mysqli_fetch_array($query13)) { echo '"' . $e['STATUS_KAWIN'] . '",';}?>],
            datasets: [{
              data: [<?php while ($e = mysqli_fetch_array($query14)) { echo '"' . $e['COUNT'] . '",';}?>],
              backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#858796'],
              hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#777a8a'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });
    </script>
<script>
            var ctx6 = document.getElementById("myChart6");
            var myChart6 = new Chart(ctx6, {
                type: 'bar',
                data: {
                    labels: [<?php while ($d = mysqli_fetch_array($query15)) { echo '"' . $d['RW'] . '",';}?>],
                    datasets: [{
                            data: [<?php while ($d = mysqli_fetch_array($query16)) { echo '"' . $d['COUNT'] . '",';}?>],
                            label: "Kepala Keluarga",
                            backgroundColor: "#4e73df",
                            hoverBackgroundColor: "#2e59d9",
                            borderWidth: 1
                        }, {
                            data: [<?php while ($d = mysqli_fetch_array($query17)) { echo '"' . $d['COUNT'] . '",';}?>],
                            label: "Anggota Keluarga",
                            backgroundColor: "#36b9cc",
                            hoverBackgroundColor: "#2c9faf",
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1
                                },
                                title: {
                                display: true,
                                text: 'axis title'
                            },
                            stacked: true
                            }],
                        xAxes: [{
                        stacked: true
                    }]
                    },
                    legend: {
                        display: false
                    }
                }
            });
    </script>
<script>
            var ctx7 = document.getElementById("myChart7");
            var myChart7 = new Chart(ctx7, {
                type: 'bar',
                data: {
                    labels: [<?php while ($d = mysqli_fetch_array($query18)) { echo '"' . $d['RT'] . '",';}?>],
                    datasets: [{
                            data: [<?php while ($d = mysqli_fetch_array($query19)) { echo '"' . $d['COUNT'] . '",';}?>],
                            label: "Kepala Keluarga",
                            backgroundColor: "#4e73df",
                            hoverBackgroundColor: "#2e59d9",
                            borderWidth: 1
                        }, {
                            data: [<?php while ($d = mysqli_fetch_array($query20)) { echo '"' . $d['COUNT'] . '",';}?>],
                            label: "Anggota Keluarga",
                            backgroundColor: "#36b9cc",
                            hoverBackgroundColor: "#2c9faf",
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1
                                },
                                title: {
                                display: true,
                                text: 'axis title'
                            },
                            stacked: true
                            }],
                        xAxes: [{
                        stacked: true
                    }]
                    },
                    legend: {
                        display: false
                    }
                }
            });
    </script>

</html>