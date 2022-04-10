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
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
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

    <!-- Section About -->
    <section class="about">

        <div class="image">
            <img src="../images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure numquam nulla iusto corporis dolor commodi libero, vitae obcaecati optio rerum ab culpa nesciunt, earum mollitia quasi ipsam non. Aliquid, iure.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid rerum, delectus voluptate aliquam quaerat iusto repellendus error nulla ab atque.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
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

    <!-- Swipper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js link -->
    <script src="../js/script.js"></script>
</body>

</html>