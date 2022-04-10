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
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/book.css">
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

    <!-- <div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
        <h1>Livro agora</h1>
    </div> -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

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