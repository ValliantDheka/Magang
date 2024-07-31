<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Madjou Solution</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .form-select, .form-control {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            width: 100%;
            height: 2%;
            box-sizing: border-box;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .form-select-label {
            margin-bottom: 0.5rem;
            display: block; /* Ensure label is displayed as a block element */
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Madjou Solution</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            <!-- Nav Item - Pendaftaran -->
            <li class="nav-item active">
                <a class="nav-link" href="/pendaftaran">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pendaftaran</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="{{ asset('assets/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <div style="background-color: #691E18; height: 100%">
                    <br />
                    <div class="border p-4 m-4 rounded-5 shadow-sm" style="background-color: #ECE2BE; height: 90%">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset ('assets/images/logo.png') }}" alt="Logo" style="width: 120px; height: 120px; margin-right: 3px;">
                            <h1 class="h1 fw-bold mb-1 text-dark text-start">Silahkan Isi Data Diri di bawah Ini</h1>
                        </div>
                        <form>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <label for="emailInput" class="form-label">Email:</label>
                                    <input type="email" class="form-control mb-3" id="emailInput" name="email" value="{{ old('email') }}" placeholder="">
                                    <label for="namaInput" class="form-label">Nama Lengkap:</label>
                                    <input type="text" class="form-control mb-3" id="namaInput" name="nama" value="{{ old('nama') }}" placeholder="">
                                    <label for="tanggalLahirInput" class="form-label">Tanggal Lahir:</label>
                                    <input type="date" class="form-control mb-3" id="tanggalLahirInput" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="">
                                    <label for="alamatInput" class="form-label">Alamat Lengkap:</label>
                                    <input type="text" class="form-control mb-3" id="alamatInput" name="alamat" value="{{ old('alamat') }}" placeholder="">
                                    <label for="nomorInput" class="form-label">Nomor:</label>
                                    <input type="text" class="form-control mb-3" id="nomorInput" name="no_hp" value="{{ old('no_hp') }}" placeholder="">
                                    <p class="fw-bold">Jenis Kelamin:</p>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="jenisKelamin1" value="Laki-laki">
                                                <label class="form-check-label" for="jenisKelamin1">Laki-laki</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="jenisKelamin2" value="Perempuan">
                                                <label class="form-check-label" for="jenisKelamin2">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <p class="fw-bold mt-4">Status Pekerjaan:</p>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="detail[status]" id="statusPekerjaan1" value="Pelajar">
                                                <label class="form-check-label" for="statusPekerjaan1">Pelajar</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="detail[status]" id="statusPekerjaan2" value="Fresh Graduate">
                                                <label class="form-check-label" for="statusPekerjaan2">Fresh Graduate</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="detail[status]" id="statusPekerjaan3" value="Karyawan">
                                                <label class="form-check-label" for="statusPekerjaan3">Karyawan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fw-bold mt-3 form-select-label">Pilih Program:</p>
                                    <div class="form-group">
                                        <select class="form-select mb-3" id="programInput" name="detail[program]">
                                            <option value="digitalMarketing">Digital Marketing</option>
                                            <option value="photoshop">Photoshop</option>
                                            <option value="illustrator">Illustrator</option>
                                            <option value="indesign">InDesign</option>
                                            <option value="aftereffects">After Effects</option>
                                            <option value="premierepro">Premiere Pro</option>
                                        </select>
                                    </div>
                                    <label for="sumberInfoInput" class="form-label">Darimana Mengetahui Program Ini:</label>
                                    <input type="text" class="form-control mb-3" id="sumberInfoInput" name="detail[info]" value="{{ old('detail.info') }}" placeholder="">
                                    <label for="motivasiInput" class="form-label">Apa Motivasi Kamu Mengikuti Program Ini:</label>
                                    <input type="text" class="form-control mb-3" id="motivasiInput" name="detail[motivasi]" value="{{ old('detail.motivasi') }}" placeholder="">
                                    <!-- Daftar Button -->
                                    <button type="submit" class="btn btn-primary mt-3">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
