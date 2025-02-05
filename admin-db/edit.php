<?php 
include "db_connect.php"; 
$NIK = $_GET['NIK']; 
 
$query=mysqli_query($kon, "SELECT * FROM KK_KEL WHERE NIK='$NIK'");
while ($row=mysqli_fetch_array($query)){ 
 
$NO_KK = $row['NO_KK'];
$NAMA_ANGGOTA = $row['NAMA_ANGGOTA']; 
$NIK = $row['NIK']; 
$TGL_LAHIR = $row['TGL_LAHIR']; 
$JENIS_KELAMIN = $row['JENIS_KELAMIN']; 
$GOL_DARAH = $row['GOL_DARAH']; 
$AGAMA = $row['AGAMA']; 
$PEND_TERAKHIR = $row['PEND_TERAKHIR']; 
$PEKERJAAN = $row['PEKERJAAN']; 
$STATUS_KAWIN = $row['STATUS_KAWIN']; 
$STATUS_HUB_KEL = $row['STATUS_HUB_KEL']; 
$KEWARGANEGARAAN = $row['KEWARGANEGARAAN']; 
$NAMA_AYAH= $row['NAMA_AYAH']; 
$NAMA_IBU = $row['NAMA_IBU']; 
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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" align="center"></h1>

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Tabel -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Perbarui Data Anggota Keluarga</h6>
                        </div>
                        <div class="card-body">
                        <table align="left">
						<?php
						echo "<form method=\"post\" action=\"update.php?NIK=$NIK\" onsubmit=\"return confirm('Pastikan semua telah terisi!');\" enctype='multipart/form-data'>"; 
						echo "<br>"; 
						echo "<tr><td>Nama Anggota Keluarga</td><td>:</td><td><input type='text' style='text-transform: uppercase' oninput='this.value = this.value.toUpperCase()'  name='NAMA_ANGGOTA' value='$NAMA_ANGGOTA' size='30'>&nbsp;
						</td></tr>";
						echo "<tr><td>NIK</td><td>:</td><td><input type='text' name='NIK' value='$NIK' size='30'>&nbsp;
						</td></tr>";
						echo "<tr><td>Tanggal Lahir</td><td>:</td><td><input type='date' name='TGL_LAHIR' placeholder='YYYY-MM-DD' value='$TGL_LAHIR' size='30'>&nbsp;
						</td></tr>";
						echo "<tr><td>Jenis Kelamin</td><td>:</td><td><label><input type='radio' name='JENIS_KELAMIN' value='L'> Laki-laki</label>
                        <label><input type='radio' name='JENIS_KELAMIN' value='P'> Perempuan</label>&nbsp;
						</td></tr>";
						echo "<tr><td>Golongan Darah</td><td>:</td><td><select name='GOL_DARAH'>
                            <option value='NULL'> </option>
                            <option value='A'>A</option>
                            <option value='B'>B</option>
                            <option value='O'>O</option>
                            <option value='AB'>AB</option>
                            <option value='TIDAK TAHU'>Tidak Tahu</option>
                        </select>&nbsp;
						</td></tr>";
						// echo "<tr><td>Agama</td><td>:</td><td><input type='text' name='AGAMA' value='$AGAMA' size='30'>&nbsp;
						// </td></tr>";
                        echo "<tr><td>Agama</td><td>:</td><td><select name='AGAMA'>
                            <option value='ISLAM' selected>Islam</option>
                            <option value='KATOLIK'>Katolik</option>
                            <option value='KRISTEN'>Kristen</option>
                            <option value='KONGHUCU'>Konghucu</option>
                            <option value='HINDU'>Hindu</option>
                            <option value='BUDHA'>Budha</option>
                        </select>&nbsp;
                        </td></tr>";
						echo "<tr><td>Pendidikan Terakhir</td><td>:</td><td><select name='PEND_TERAKHIR'>
                            <option value='TIDAK/BLM SEKOLAH'>Tidak/Blm Sekolah</option>
                            <option value='BELUM TAMAT SD/SEDERAJAT'>Belum Tamat SD/Sederajat</option>
                            <option value='TAMAT SD/SEDERAJAT'>Tamat SD/Sederajat</option>
                            <option value='SLTP/SEDERAJAT'>SLTP/Sederajat</option>
                            <option value='SLTA/SEDERAJAT'>SLTA/Sederajat</option>
                            <option value='DIPLOMA I/II'>Diploma I/II</option>
                            <option value='AKADEMI/DIPLOMA III/SARJANA MUDA'>SLTA/Sederajat</option>
                            <option value='DIPLOMA IV/STRATA I'>Diploma IV/Strata I</option>
                            <option value='STRATA II'>Strata II</option>
                            <option value='STRATA III'>Strata III</option>
                        </select>&nbsp;
						</td></tr>";
						echo "<tr><td>Pekerjaan</td><td>:</td><td><select name='PEKERJAAN'>
                            <option value='TIDAK MEMPUNYAI KERJAAN TETAP'>Tidak Mempunyai Pekerjaan Tetap</option>
                            <option value='BELUM BEKERJA'>Belum Bekerja</option>
                            <option value='PETANI/PEKEBUN' selected>Petani/pekebun</option>
                            <option value='BURUH TANI'>Buruh Tani</option>
                            <option value='PEGAWAI NEGERI SIPIL'>Pegawai Negeri Sipil</option>
                            <option value='KARYAWAN PERUSAHAAN SWASTA'>Karyawan Perusahaan Swasta</option>
                            <option value='KARYAWAN PERUSAHAAN PEMERINTAH'>Karyawan Perusahaan Pemerintah</option>
                            <option value='PEDAGANG BARANG KELONTONG'>Pedagang Barang Kelontong</option>
                            <option value='TNI'>TNI</option>
                            <option value='POLRI'>POLRI</option>
                            <option value='GURU SWASTA'>Guru Swasta</option>
                            <option value='PEDAGANG KELILING'>Pedagang Keliling</option>
                            <option value='TUKANG KAYU'>Tukang Kayu</option>
                            <option value='TUKANG BATU'>Tukang Batu</option>
                            <option value='WIRASWASTA'>Wiraswasta</option>
                            <option value='PELAJAR/MAHASISWA'>Pelajar/Mahasiswa</option>
                            <option value='MENGURUS RUMAH TANGGA'>Mengurus Rumah Tangga</option>
                            <option value='PURNAWIRAWAN/PENSIUNAN'>Purnawirawan/Pensiunan</option>
                            <option value='PERANGKAT DESA'>Perangkat Desa</option>
                            <option value='BURUH HARIAN LEPAS'>Buruh Harian Lepas</option>
                            <option value='SOPIR'>Sopir</option>
                            <option value='PENGRAJIN INDUSTRI RUMAH TANGGA LAINNYA'>Pengrajin Industri Rumah Tangga Lainnya</option>
                            <option value='TUKANG JAHIT'>Tukang Jahit</option>
                            <option value='TUKANG RIAS'>Tukang Rias</option>
                            <option value='KARYAWAN HONORER'>Karyawan Honorer</option>
                            <option value='TUKANG CUKUR'>Tukang Cukur</option>
                            <option value='ANGGOTA LEGISLATIF'>Anggota Legislatif</option>
                            <option value='KEPALA DAERAH'>Kepala Daerah</option>
                            <option value='DOKTER'>Dokter</option>
                            <option value='BIDAN'>Bidan</option>
                            <option value='BEKERJA DI LUAR NEGERI'>Bekerja Di Luar Negeri</option>
                        </select>&nbsp;
						</td></tr>";
						echo "<tr><td>Status Perkawinan</td><td>:</td><td><select name='STATUS_KAWIN'>
                            <option value='KAWIN'>Kawin</option>
                            <option value='BELUM KAWIN' selected>Belum Kawin</option>
                            <option value='CERAI HIDUP'>Cerai Hidup</option>
                            <option value='CERAI MATI'>Cerai Mati</option>
                        </select>&nbsp;
						</td></tr>";
						echo "<tr><td>Status Hubungan Keluarga</td><td>:</td><td><select name='STATUS_HUB_KEL'>
                            <option value='KEPALA KELUARGA'>Kepala Keluarga</option>
                            <option value='ISTRI'>Istri</option>
                            <option value='SUAMI'>Suami</option>
                            <option value='ANAK'>Anak</option>
                            <option value='MENANTU'>Menantu</option>
                            <option value='CUCU'>Cucu</option>
                            <option value='ORANG TUA'>Orang tua</option>
                            <option value='MERTUA'>Mertua</option>
                            <option value='FAMILI LAIN'>Famili Lain</option>
                            <option value='PEMBANTU'>Pembantu</option>
                            <option value='LAINNYA'>Lainnya</option>
                        </select>&nbsp;
						</td></tr>";
						echo "<tr><td>Kewarganegaraan</td><td>:</td><td><label><input type='radio' name='KEWARGANEGARAAN' value='WNI' checked> WNI</label>
                        <label><input type='radio' name='KEWARGANEGARAAN' value='WNA'> WNA</label>&nbsp;
						</td></tr>";
						echo "<tr><td>Nama Ayah</td><td>:</td><td><input type='text' style='text-transform: uppercase' oninput='this.value = this.value.toUpperCase()' name='NAMA_AYAH' value='$NAMA_AYAH' size='30'>&nbsp;
						</td></tr>";
						echo "<tr><td>Nama Ibu</td><td>:</td><td><input type='text' style='text-transform: uppercase' oninput='this.value = this.value.toUpperCase()' name='NAMA_IBU' value='$NAMA_IBU' size='30'>&nbsp;
						</td></tr>";
						}
						?>
						<tr><td></td><td></td><td><font size='2'><input type='submit' name='submit' value='Update'/></font></td></tr>
					</table>
				</form>
			</body>
			</html>
