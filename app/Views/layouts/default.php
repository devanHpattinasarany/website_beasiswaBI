<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->renderSection('title') ?>
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
                    <a href="/index" class="text-nowrap logo-img">
                        <img src="<?= base_url() ?>/assets/images/logos/dark-logo.png" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <?= $this->include('layouts/sidebar'); ?>
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
            <?= $this->include('layouts/header'); ?>
            <!--  Header End -->
            <!-- content -->
            <?= $this->renderSection('content') ?>
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