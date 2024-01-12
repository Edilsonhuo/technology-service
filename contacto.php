<?php

    
    include 'db/conexao.php';
    if (isset($_POST['enviar'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        $date = date("d-m-y");

        if (empty($nome) && empty($email) && empty($assunto) && empty($mensagem)) {
            echo "Error";
        }else{
            $sql = $conn->prepare("INSERT INTO clientes(nome, email, assunto, mensagem, data) VALUES(:nome, :email, :assunto, :mensagem, :data)");
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':assunto', $assunto);
            $sql->bindParam(':mensagem', $mensagem);
            $sql->bindparam(':data', $date);

            $sql->execute();
            header("location: contacto.php");
        }
        

    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacto.css">
    <title>Contacts</title>
</head>
<body>
    <!--Header-->
    <header style="background-image: url('img/background-servicos.jpg');">
        <div class="container">
            <nav>
                <a href="index.html">
                    <img src="img/meta-96.png" alt="">
                </a>

                <ul>
                    <a href="index.php">Home</a>
                    <a href="sobre.php">Sobre</a>
                    <a href="servicos.php">Servicos</a>
                    <a class="btn" href="contacto.php" >Contacto</a>
                </ul>
            </nav>

            <section class="banner">
                <div class="banner-text">
                    <h1>Contacte-nos</h1>
                </div>
            </section>
        </div>
    </header>
    <!--End Header-->

    <section class="contacto">
        <div class="container">
            <div class="contacto-inf">
                <div class="left-side">
                    <div>
                        <img src="img/location-pin.svg" alt="">
                        <p>AV.Samora Machel. Inhambane</p>
                    </div>

                    <div>
                        <img src="img/email.svg" alt="">
                        <p>Koudak@gmail.com</p>
                    </div>

                    <div>
                        <img src="img/ui-call.svg" alt="">
                        <p>+258 873212435</p>
                    </div>
                </div>

                <div class="right-side">
                    <form action=""  method="post">
                        <input type="text" placeholder="Nome" name="nome" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="text" placeholder="Assunto" name="assunto" required>
                        <textarea placeholder="Sua Menssagem" name="mensagem" id="" cols="30" rows="10" required></textarea>
                        <button type="submit" class="btn" name="enviar">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="footer">
        <p>Desenvolvido pela Koudak &copy;</p>

    </footer>
    <!--End Footer-->
</body>
</html>