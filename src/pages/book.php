<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

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
    <link rel="stylesheet" href="../assets/css/book.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>

<body>
    <!-- section header -->
    <?php include "../../src/templates/base/header.html" ?>

    <!-- Section Booking -->
    <?php include "../../src/templates/book/booking.html" ?>
    
    <!-- Section Footer -->
    <?php include "../../src/templates/base/footer.html" ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> <!-- Swipper js link -->
    <script src="../../public/scripts/app.js"></script> <!-- custom js link -->
</body>

</html>