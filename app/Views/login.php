<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<link rel=" preconnect" href="https://fonts.googleapis.com">

    <title>Masuk</title>

    <link rel="stylesheet" href="assets/css/landing_pageLR.css">

</head>

<body>

    <!-------Navbar & Hero Section----->

    <section>
        <nav>
            <a href="index.html"> <img src="assets/images/landing_pageLR/logo BI.svg" width="10%" alt=""></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-arrow-left" onclick="hidenMenu()"></i>
                <!-- <ul>
                    <li><a href="#beranda" class="active">Beranda</a></li>
                    <li><a href="#timeline">Timeline</a></li>
                    <li><a href="#informasi">Informasi</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#komunitas">Komunitas</a></li>
                </ul>
            </div>

            <div class="masuk-btn">
                <a href="login.html">Masuk</a>
            </div> -->

                <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <!-------End Navbar & Hero Section----->


    <!-------Login------->

    <section class="login">
        <img src="assets/images/landing_pageLR/login.svg" alt="">
        <div>
            <div class="login-col">
                <form action="">
                    <h1>Masuk</h1>

                    <label for="">Username</label>
                    <input type="text" placeholder="Example@gmail.com">

                    <label for="">Password</label>
                    <input type="text" placeholder="Password">

                    <a href="">Lupa Password?</a>

                    <button>Masuk</button>

                </form>
            </div>
            <p>
                Belum memiliki akun? <a href="Registrasi.html">Daftar disini</a>
            </p>

        </div>
    </section>

    <!-------End Login------->


    <section class="footer">
        <div class="footer-col">
            <p> Copyright 2024</p>
        </div>
    </section>

    <script>
        var nav = document.querySelector("nav")
        window.addEventListener("scroll", () => {
            if (document.documentElement.scrollTop > 20) {
                nav.classList.add("sticky");
            } else {
                nav.classList.remove("sticky");
            }
        });
    </script>

</body>

</html>