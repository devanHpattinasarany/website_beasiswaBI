<?= $this->extend('auth/templates/index') ?>

<?= $this->section('title') ?>
<title>register</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <!-------Navbar & Hero Section----->
    <section>
        <nav>
            <a href="index.html"> <img src="<?= base_url() ?>/assets/images/landing_pageLR/logo BI.svg" width="10%" alt=""></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-arrow-left" onclick="hidenMenu()"></i>

                <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <!-------End Navbar & Hero Section----->


    <!-------Registrasi------->

    <section class="registrasi">
        <img src="<?= base_url() ?>/assets/images/landing_pageLR/registrasi.svg" alt="">
        <div>
            <div class="regis-col">
                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <h1><?= lang('Auth.register') ?></h1>

                    <div class="form-group">
                        <label for="npm_nim">NPM/NIM</label>
                        <input type="text" class="form-control" name="npm_nim" value="<?= old('npm_nim') ?>">
                    </div>

                    <div class="form-group">
                        <label for="username"><?= lang('Auth.username') ?></label>
                        <input type="text" class="form-control" name="username">
                    </div>

                    <div class="form-group">
                        <label for="asal_universitas">Asal Universitas</label>
                        <select name="asal_universitas" id="asal_universitas">
                            <option value="">...</option>
                            <option value="1">Universitas Pattimura</option>
                            <option value="2">Institut Agama Islam Negeri Ambon</option>
                            <option value="3">Universitas Kristen Indonesia Maluku</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email"><?= lang('Auth.email') ?></label>
                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    </div>

                    <div class="form-group">
                        <label for="password"><?= lang('Auth.password') ?></label>
                        <input type="password" name="password" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>

                </form>
            </div>
            <p>
                Sudah memiliki akun? <a href="/login">Masuk</a>
            </p>

        </div>
    </section>

    <!-------End Registarsi------->


    <section class="footer">
        <div class="footer-col">
            <p> Copyright 2024</p>
        </div>
    </section>
</div>
<?= $this->endSection() ?>