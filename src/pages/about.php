<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Thiago Santos Tassinari">
    <meta name="email" content="devtassinari@gmail.com">
    <meta name="description" content="Site de pacote de viagens">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Swipper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Custom css file link -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/review.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>

<body>
    <!-- section header -->
    <?php include "../../src/templates/base/header.html" ?>

    <div class="heading bg-image">
        <!-- <h1>Sobre Nós</h1> -->
        <img src="../../public/images/bg-about.jpg" alt="">
    </div>

    <!-- Section About -->
    <?php include "../../src/templates/about/about.html" ?>

    <!-- Section review -->
    <?php include "../../src/templates/about/review.html" ?>

    <!-- Section Footer -->
    <?php include "../../src/templates/base/footer.html" ?>

    <!-- Swipper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js link -->
    <script src="../../public/scripts/app.js"></script>
</body>

</html>