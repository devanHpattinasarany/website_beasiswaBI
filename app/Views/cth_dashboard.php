<!-- default -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>yosh BeasiswaBI &mdash; Dashboard </title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>/assets/images/logos/faviconbi.png" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/styles.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="<?= base_url() ?>/assets/images/logos/dark-logo.png" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                                <span>
                                    <img src="<?= base_url() ?>/assets/images/icons/dashboard.svg" alt="">
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/pendaftar1" aria-expanded="false">
                                <span>
                                    <img src="<?= base_url() ?>/assets/images/icons/pendaftaran.svg" alt="">
                                </span>
                                <span class="hide-menu">Pendaftaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/profile" aria-expanded="false">
                                <span>
                                    <img src="<?= base_url() ?>/assets/images/icons/profile.svg" alt="">
                                </span>
                                <span class="hide-menu">Edit Profile</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header shadow-sm">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <!-- content -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <div class="mt-2">
                            <h1>YOSSHHH</h1>
                            <h2>Dasboard</h2>
                        </div>
                        <div class="mt-4">
                            <h2 class="fw-bolder hjfsminheight">
                                Hallo,<br>Admin Kemahasiswaan
                            </h2>
                            <p class="ukimld">Universitas Kristen Indonesia Maluku | <span class="text-danger fst-italic">( Lengkapi data )
                                </span></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="card border-radius-forcard-custom shadow">
                            <div class="card-body text-center">
                                <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/pendaftarandanseleksi.svg" alt="">
                                <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                            </div>
                            <div class="card-footer cf text-center">
                                <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-radius-forcard-custom shadow">
                            <div class="card-body text-center">
                                <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/phs.svg" alt="">
                                <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                            </div>
                            <div class="card-footer cf text-center">
                                <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-radius-forcard-custom shadow">
                            <div class="card-body text-center">
                                <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/seleksi_wawancara.svg" alt="">
                                <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                            </div>
                            <div class="card-footer cf text-center">
                                <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-radius-forcard-custom shadow">
                            <div class="card-body text-center">
                                <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/pengumuman_hsw.svg" alt="">
                                <p class="card-text">Pendaftaran & Seleksi Berkas</p>
                            </div>
                            <div class="card-footer cf text-center">
                                <img src="<?= base_url() ?>/assets/images/icons/rectangle.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2">
                                <img class="marginbdashboard" src="<?= base_url() ?>/assets/images/icons/ketentuan.svg" alt="">
                            </div>
                            <div class="col-4 nav-linkk active">
                                <p class="fw-bolder tprimary kukcustom">Ketentuan<br>Umum & Khusus</p>
                            </div>
                            <div class="col-2 margin-15px">
                                <img src="<?= base_url() ?>/assets/images/icons/persyratan.svg" alt="">
                            </div>
                            <div class="col-4 nav-linkk">
                                <p class="fw-bolder tprimary kukcustom">Persyaratan<br>Dokumen</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col tprimary">
                        <p>1. Merupakan mahasiswa aktif program S1 yang dibuktikan dengan Kartu Tanda Mahasiswa atau surat keterangan aktif.</p>
                        <p class="margint-10px">
                            2. Sekurang-kurangnya telah menyelesaikan 40 (empat puluh) satuan kredit semester (SKS) atau 3 (tiga) semester.
                        </p>
                        <p class="margint-10px">
                            3. Setiap mahasiswa, menerima beasiswa paling lama hanya 4 (empat) semester sepanjang memenuhi kriteria yang telah ditentukan.
                        </p>
                        <p class="margint-10px">
                            4. Maksimal berusia 23 tahun atau belum berusia 24 tahun pada saat ditetapkan sebagai penerima beasiswa.
                        </p>
                        <p class="margint-10px">
                            5. TIdak sedang menerima beasiswa dari lembaga lain dan/atau berada dalam status ikatan dinas dari lembaga/instansi lain.
                        </p>
                        <p class="margint-10px">
                            6. Mempunyai pengalaman menjalankan aktivitas sosial yang memiliki dampak kebermanfaatan bagi masyarakat.
                        </p>
                        <p class="margint-10px">
                            7. Bersedia untuk berperan aktif, mengelola dan mengembangkan Generasi Baru Indonesia (GenBI) serta berpartisipasi dalam kegiatan yang diselenggarakan oleh Bank Indonesia.
                        </p>
                        <p class="margint-10px">
                            8. Bagi mahasiswa yang berasal dari latar belakang ekonomi keluarga kurang mampu (pra sejahtera) yang dibuktikan dengan adanya Surat Keterangan Tidak Mampu (SKTM) dari kelurahan/desa domisili orang tua mahasiswa.
                        </p>
                        <p class="margint-10px">
                            9. Membuat resume pribadi dan motivation letter dalam bahasa Indonesia.
                        </p>
                        <p class="margint-10px">
                            10. Menyertakan surat rekomendasi dari 1 tokoh (akademik dan non-akademik).
                        </p>
                    </div>
                </div>

            </div>
            <!-- end content -->
        </div>
    </div>

    <!-- <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Design and Developed by jo</p>
    </div> -->

    <script src="<?= base_url() ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/sidebarmenu.js"></script>
    <script src="<?= base_url() ?>/assets/js/app.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="<?= base_url() ?>/assets/js/dashboard.js"></script>

</body>

</html>
<!-- default -->