<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Thiago Santos Tassinari">
    <meta name="email" content="devtassinari@gmail.com">
    <meta name="description" content="Site de pacote de viagens">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Custom css file link -->
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/home-about.css">
    <link rel="stylesheet" href="../css/home-packages.css">
    <link rel="stylesheet" href="../css/home-offer.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
    <!-- section header -->
    <?php include "../src/templates/base/header.html" ?>

    <!-- Section Home -->
    <?php include "../src/templates/home/home.html" ?>

    <!-- Section Services -->
    <?php include "../src/templates/home/services.html" ?>

    <!-- Section Home-About -->
    <?php include "../src/templates/home/home-about.html" ?>


    <!-- Section Home-Packages -->
    <?php include "../src/templates/home/home-packages.html" ?>

    <!-- Section Home-Offer -->
    <?php include "../src/templates/home/home-offer.html" ?>

    <!-- Section Footer -->
    <?php include "../src/templates/base/footer.html" ?>

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js link -->
    <script src="../js/script.js"></script>
</body>

</html>