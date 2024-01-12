<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Servicos Informaticos</title>
</head>
<body>
    <!--Header-->
    <header style="background-image: url('img/tecnologia-r1.jpg')">
        <!--Container-->
        <div class="container">
            <nav>
                <a href="index.php" >
                    <img src="img/meta-96.png" alt="UMUM">
                </a>
                <ul class="ul open">
                    <a href="index.php">Home</a>
                    <a href="sobre.php">Sobre</a>
                    <a href="servicos.php">Servicos</a>
                    <a class="btn" href="contacto.php">Contactos</a>

                    <div class="close-icon">
                        <img src="img/menu.png" alt="">
                    </div>
                </ul>
                <div class="menu-icon" onclick="openMenu()">
                    <img src="img/menu.png" alt="">
                    <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
                </div>
            </nav>

            <section class="banner">
                <div class="banner-text">
                    <h1>Seja Bem Vindo</h1>
                    <p>Obtenha conhecimento, conquiste o mundo da tecnologia com o melhor apoio</p>
                    <a href="contacto.php" class=" btn btn-animado">Entrar em Contacto</a>
                </div>
            </section>
        </div>
        <!--End Container-->
    </header>
    <!--End Header-->

    <!--Nova Section-->
    <section class="faca-mais">
        <div class="container">
            <div class="div-text">
                <h3>Faca mais com a Koudak</h3>
                <p>Criacao de WebSitee App para pequenas, medias e grandes empresas</p>
                <a href="contacto.php" class="btn btn-animado">Entrar em Contacto</a>
            </div>
            <div class="div-img">
                <img src="img/conceito.webp" alt="">
            </div>
        </div>
    </section>
    <!--Fim da nova Section-->

    <!--Nova Section 2-->
    <section class="faca-mais">
        <div class="container">
            <div class="div-img">
                <img src="img/img-2.png" alt="">
            </div>
            <div class="div-text">
                <h3>Gostaria de ter um WebSite</h3>
                <p>Agora com a nossa empresa, o seu sonho de ter um podera se tornar possivel</p>
                <a href="contacto.php" class="btn btn-animado">Entrar em Contacto</a>
            </div>
        </div>
    </section>

    <!--Fim da Nova Section 2-->

    <!--Depoimentos-->
    <section class="depoimentos">
        <div class="container">
            <h3>Beneficiarios</h3>
            <p>Obverve alguns comentarios que algumas empresas partilharam</p>

            <div class="cards">
                <!--card item 1-->
                <div class="card-item">
                    <img src="img/1UMUM.png" alt="UMUM">
                    <p class="user-name">UMUM</p>
                    <p class="user-depoiment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex perferendis delectus nam possimus odit officiis, consequuntur quo assumenda. Maxime.</p>
                </div>
                <!--end card item 1-->

                    <!--card item 2-->
                    <div class="card-item">
                        <img src="img/1UMUM.png" alt="UMUM">
                        <p class="user-name">UMUM</p>
                        <p class="user-depoiment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex perferendis delectus nam possimus odit officiis, consequuntur quo assumenda. Maxime.</p>
                    </div>
                    <!--end card item 2-->
                
                    <!--card item 3-->
                    <div class="card-item">
                        <img src="img/1UMUM.png" alt="UMUM">
                        <p class="user-name">UMUM</p>
                        <p class="user-depoiment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex perferendis delectus nam possimus odit officiis, consequuntur quo assumenda. Maxime.</p>
                    </div>
                    <!--end card item 3-->
            </div>
        </div>
    </section>
    <!--Fim Depoimentos-->

    <!--Footer-->
    <footer class="footer">
        <div class="container">
            <div class="links">
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p>Desenvolvido pela Koudak &copy;</p>
        </div>
    </footer>
    <!--End Footer-->
    <script src="js/main.js"></script>
</body>
</html>