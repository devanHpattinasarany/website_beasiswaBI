<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BeasiswaBI &mdash; Login</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>/assets/images/logos/faviconbi.png" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/styles.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <h1 class="fw-bold">Masuk</h1>
                                </a>
                                <!-- <p class="text-center">Your Social Campaigns</p> -->
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label fontroboto">Username</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label fontroboto">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <a class="text-primary fw-bold" href="./index.html">Lupa Sandi?</a>
                                    </div>
                                    <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Masuk</a>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Belum memiliki akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Daftar disini</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>