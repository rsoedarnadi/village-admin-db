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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" align="center"></h1>

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Tabel -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Anggota Keluarga Baru</h6>
                        </div>
                        <div class="card-body">
         <form action="insert_record_kk.php" method="POST">
             <table align="left">
                 <tr>
                     <td>Nomor KK</td>
                     <td>:</td>
                     <td><input type="text" name="NO_KK" size="30"></td>
                 </tr> 
 
                 <tr>
                     <td>Nama Kepala Keluarga</td>
                     <td>:</td>
                     <!-- <td><input type="text" name="NAMA_KK" size="30"></td> -->
                     <td><input type="text" style="text-transform: uppercase" name="NAMA_KK" oninput="this.value = this.value.toUpperCase()" size="30"></td>
                 </tr>

                <tr>
                    <td>Nama Anggota</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="NAMA_ANGGOTA" size="30"></td> -->
                    <td><input type="text" style="text-transform: uppercase" oninput="this.value = this.value.toUpperCase()" name="NAMA_ANGGOTA" size="30"></td>
                </tr>

                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><input type="text" name="NIK" size="30"></td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="TGL_LAHIR" size="30"></td> -->
                    <td><input type="date" name="TGL_LAHIR" placeholder="YYYY-MM-DD" size="30"></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="JENIS_KELAMIN" size="30"></td> -->
                    <td>
                        <label><input type="radio" name="JENIS_KELAMIN" value="L"> Laki-laki</label>
                        <label><input type="radio" name="JENIS_KELAMIN" value="P"> Perempuan</label>
                    <br></td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="GOL_DARAH" size="30"></td> -->
                    <td>
                        <select name="GOL_DARAH">
                            <option value="NULL"> </option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                            <option value="TIDAK TAHU">Tidak Tahu</option>
                        </select>
                    <br></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="AGAMA" size="30"></td> -->
                    <td>
                        <select name="AGAMA">
                            <option value="ISLAM">Islam</option>
                            <option value="KATOLIK">Katolik</option>
                            <option value="KRISTEN">Kristen</option>
                            <option value="KONGHUCU">Konghucu</option>
                            <option value="HINDU">Hindu</option>
                            <option value="BUDHA">Budha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="PEND_TERAKHIR" size="30"></td> -->
                    <td>
                        <select name="PEND_TERAKHIR">
                            <option value="TIDAK/BLM SEKOLAH">Tidak/Blm Sekolah</option>
                            <option value="BELUM TAMAT SD/SEDERAJAT">Belum Tamat SD/Sederajat</option>
                            <option value="TAMAT SD/SEDERAJAT">Tamat SD/Sederajat</option>
                            <option value="SLTP/SEDERAJAT">SLTP/Sederajat</option>
                            <option value="SLTA/SEDERAJAT">SLTA/Sederajat</option>
                            <option value="DIPLOMA I/II">Diploma I/II</option>
                            <option value="AKADEMI/DIPLOMA III/SARJANA MUDA">SLTA/Sederajat</option>
                            <option value="DIPLOMA IV/STRATA I">Diploma IV/Strata I</option>
                            <option value="STRATA II">Strata II</option>
                            <option value="STRATA III">Strata III</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="PEKERJAAN" size="30"></td> -->
                    <td>
                        <select name="PEKERJAAN">
                            <option value="TIDAK MEMPUNYAI KERJAAN TETAP">Tidak Mempunyai Pekerjaan Tetap</option>
                            <option value="BELUM BEKERJA">Belum Bekerja</option>
                            <option value="PETANI/PEKEBUN">Petani/pekebun</option>
                            <option value="BURUH TANI">Buruh Tani</option>
                            <option value="PEGAWAI NEGERI SIPIL">Pegawai Negeri Sipil</option>
                            <option value="KARYAWAN PERUSAHAAN SWASTA">Karyawan Perusahaan Swasta</option>
                            <option value="KARYAWAN PERUSAHAAN PEMERINTAH">Karyawan Perusahaan Pemerintah</option>
                            <option value="PEDAGANG BARANG KELONTONG">Pedagang Barang Kelontong</option>
                            <option value="TNI">TNI</option>
                            <option value="POLRI">POLRI</option>
                            <option value="GURU SWASTA">Guru Swasta</option>
                            <option value="PEDAGANG KELILING">Pedagang Keliling</option>
                            <option value="TUKANG KAYU">Tukang Kayu</option>
                            <option value="TUKANG BATU">Tukang Batu</option>
                            <option value="WIRASWASTA">Wiraswasta</option>
                            <option value="PELAJAR/MAHASISWA">Pelajar/Mahasiswa</option>
                            <option value="MENGURUS RUMAH TANGGA">Mengurus Rumah Tangga</option>
                            <option value="PURNAWIRAWAN/PENSIUNAN">Purnawirawan/Pensiunan</option>
                            <option value="PERANGKAT DESA">Perangkat Desa</option>
                            <option value="BURUH HARIAN LEPAS">Buruh Harian Lepas</option>
                            <option value="SOPIR">Sopir</option>
                            <option value="PENGRAJIN INDUSTRI RUMAH TANGGA LAINNYA">Pengrajin Industri Rumah Tangga Lainnya</option>
                            <option value="TUKANG JAHIT">Tukang Jahit</option>
                            <option value="TUKANG RIAS">Tukang Rias</option>
                            <option value="KARYAWAN HONORER">Karyawan Honorer</option>
                            <option value="TUKANG CUKUR">Tukang Cukur</option>
                            <option value="ANGGOTA LEGISLATIF">Anggota Legislatif</option>
                            <option value="KEPALA DAERAH">Kepala Daerah</option>
                            <option value="DOKTER">Dokter</option>
                            <option value="BIDAN">Bidan</option>
                            <option value="BEKERJA DI LUAR NEGERI">Bekerja Di Luar Negeri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status Kawin</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="STATUS_KAWIN" size="30"></td> -->
                    <td>
                        <select name="STATUS_KAWIN">
                            <option value="KAWIN">Kawin</option>
                            <option value="BELUM KAWIN">Belum Kawin</option>
                            <option value="CERAI HIDUP">Cerai Hidup</option>
                            <option value="CERAI MATI">Cerai Mati</option>
                        </select>
                    </td> 
                </tr>
                <tr>
                    <td>Status Hubungan Keluarga</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="STATUS_HUB_KEL" size="30"></td> -->
                    <td>
                        <select name="STATUS_HUB_KEL">
                            <option value="KEPALA KELUARGA">Kepala Keluarga</option>
                            <option value="ISTRI">Istri</option>
                            <option value="SUAMI">Suami</option>
                            <option value="ANAK">Anak</option>
                            <option value="MENANTU">Menantu</option>
                            <option value="CUCU">Cucu</option>
                            <option value="ORANG TUA">Orang tua</option>
                            <option value="MERTUA">Mertua</option>
                            <option value="FAMILI LAIN">Famili Lain</option>
                            <option value="PEMBANTU">Pembantu</option>
                            <option value="LAINNYA">Lainnya</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="KEWARGANEGARAAN" size="30"></td> -->
                    <td>
                        <label><input type="radio" name="KEWARGANEGARAAN" value="WNI"> WNI</label>
                        <label><input type="radio" name="KEWARGANEGARAAN" value="WNA"> WNA</label>
                    <br></td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="NAMA_AYAH" size="30"></td> -->
                    <td><input type="text" name="NAMA_AYAH" style="text-transform: uppercase" oninput="this.value = this.value.toUpperCase()" size="30"></td>
                </tr><tr>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <!-- <td><input type="text" name="NAMA_IBU" size="30"></td> -->
                    <td><input type="text" name="NAMA_IBU" style="text-transform: uppercase" oninput="this.value = this.value.toUpperCase()" size="30"></td>
                </tr><tr>
                    <td>RT</td>
                    <td>:</td>
                    <td>
                        <select name="RT">
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>RW</td>
                    <td>:</td>
                    <td>
                        <select name="RW">
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                     <td></td><td></td>
                     <td><input type="submit" value="Tambah">
                     <a href="tables.php" style="text-decoration:none">kembali</a>
                     </td>
                 </tr>
             </table>
         </form>
     </div>


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

</html>
