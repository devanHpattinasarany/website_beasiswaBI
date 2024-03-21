<?= $this->extend('auth/templates/index') ?>


<?= $this->section('title') ?>
<title>Login</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <!-------Navbar & Hero Section----->

    <section>
        <nav>
            <a href="/"> <img src="<?= base_url() ?>/assets/images/landing_pageLR/logo BI.svg" width="10%" alt=""></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-arrow-left" onclick="hidenMenu()"></i>

                <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <!-------End Navbar & Hero Section----->


    <!-------Login------->

    <section class="login">
        <img src="<?= base_url() ?>/assets/images/landing_pageLR/login.svg" alt="">
        <div>
            <div class="login-col">
                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <h1><?= lang('Auth.loginTitle') ?></h1>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <?php if ($config->validFields === ['email']) : ?>
                        <div class="form-group">
                            <label for="login"><?= lang('Auth.email') ?></label>
                            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="form-group">
                            <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="password"><?= lang('Auth.password') ?></label>
                        <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <?php if ($config->allowRemembering) : ?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>

                    <a href="">Lupa Password?</a>

                    <button>Masuk</button>

                </form>
            </div>
            <p>
                Belum memiliki akun? <a href="/register">Daftar disini</a>
            </p>

        </div>
    </section>

    <!-------End Login------->


    <section class="footer">
        <div class="footer-col">
            <p> Copyright 2024</p>
        </div>
    </section>
</div>
<?= $this->endSection() ?>