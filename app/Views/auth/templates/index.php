<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com">

    <?= $this->renderSection('title') ?>

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/landing_pageLR.css">

</head>

<body>
    <?= $this->renderSection('content') ?>


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