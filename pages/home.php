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
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
    <!-- section header -->
    <section class="header">
        <a href="home.php" class="logo">Let's Trip.</a>

        <nav class="navbar">
            <a href="home.php">Início</a>
            <a href="about.php">Sobre</a>
            <a href="package.php">Pacotes</a>
            <a href="book.php">Livro</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- Section Home -->
    <section class="home">

        <div class="swiper home-slider ">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Explore, descubra, viagem</span>
                        <h3>Viagem ao redor do mundo</h3>
                        <a href="package.php" class="btn">Descubra mais</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Explore, descubra, viagem</span>
                        <h3>Viagem ao redor do mundo</h3>
                        <a href="package.php" class="btn">Descubra mais</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Explore, descubra, viagem</span>
                        <h3>Faça seu passeio valer a pena</h3>
                        <a href="package.php" class="btn">Descubra mais</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Section Services -->
    <section class="services">
        <h1 class="heading-title">Nossos serviços</h1>

        <div class="box-container">

            <div class="box">
                <img src="../images/icon-1.png" alt="">
                <h3>Aventuras</h3>
            </div>

            <div class="box">
                <img src="../images/icon-2.png" alt="">
                <h3>Guia Turístico</h3>
            </div>

            <div class="box">
                <img src="../images/icon-3.png" alt="">
                <h3>Trilhas</h3>
            </div>

            <div class="box">
                <img src="../images/icon-4.png" alt="">
                <h3>Fogueira</h3>
            </div>

            <div class="box">
                <img src="../images/icon-5.png" alt="">
                <h3>Off road</h3>
            </div>

            <div class="box">
                <img src="../images/icon-6.png" alt="">
                <h3>Acampamento</h3>
            </div>
        </div>
    </section>

    <!-- Section Footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Links de atalho</h3>
                <a href="home.html"> <i class="fas fa-angle-right"></i> Início</a>
                <a href="about.html"> <i class="fas fa-angle-right"></i> Sobre</a>
                <a href="package.html"> <i class="fas fa-angle-right"></i> Pacotes</a>
                <a href="book.html"> <i class="fas fa-angle-right"></i> Livro</a>
            </div>

            <div class="box">
                <h3>Links extras</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Faça perguntas</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Sobre nós</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Política de privacidade</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Termos de uso</a>
            </div>

            <div class="box">
                <h3>Informações para contato</h3>
                <a href="#"> <i class="fas fa-phone"></i> +55(98)98416-3635</a>
                <a href="#"> <i class="fas fa-envelope"></i> devtassinari@gmail.com</a>
                <a href="#"> <i class="fas fa-envelope"></i> thiagotassinari12@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> São Luís, Brasil - 65070-290</a>
            </div>

            <div class="box">
                <h3>Siga-nos</h3>
                <a href="#"> <i class="fas fa-facebook-f"></i> Facebook</a>
                <a href="#"> <i class="fas fa-twitter"></i> Twitter</a>
                <a href="#"> <i class="fas fa-instagram"></i> Instagram</a>
                <a href="#"> <i class="fas fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>

        <div class="credit">Criado por <span>Sr. Thiago Tassinari</span> | Todos os direitos reservados</div>
    </section>

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js link -->
    <script src="../js/script.js"></script>
</body>

</html>