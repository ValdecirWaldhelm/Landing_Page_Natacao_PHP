<?php
    session_start(); //deve vir antes de todo codigo section start
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title></title>

</head>
<body>

    <main id="home">
        <video autoplay muted loop class="video">
            <source src="media/Swimming.mp4">
        </video> <!--class video-->
        <div class="overlay"></div> 
                <div class="icons-social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-instagram-square"></i></a>
                </div> <!--icons-social-->
            <header class="menu">
                <div class="logo"></div>
                <nav class="desktop">
                    <ul>
                        <a href="#home"><li>Home</li></a>
                        <a href="#sobre"><li>Sobre</li></a>
                        <a href="#modalidades"><li>Modalidades</li></a>
                        <a href="#inscricao"><li>Inscricao</li></a>
                    </ul>
                </nav> <!--desktop-->
            </header> <!--menu-->
    </main> <!--home-->

    <section id="sobre">
        <div class="container-sobre">
            <div class="sobre-imagem"></div>
            <div class="container-text">
                <h1>Escola Natação</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quos quam alias eveniet earum dolor ipsum voluptas, tempora nesciunt. Molestias at cumque provident! Possimus exercitationem sapiente doloribus? Ab, impedit? Quas.
                </p>
            </div> <!--container-text-->
        </div> <!--container sobre-->

        <div class="container-sobre2">
            <div class="sobre-imagem2"></div>
            <div class="container-text">
                <h1>Escola Natação</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quos quam alias eveniet earum dolor ipsum voluptas, tempora nesciunt. Molestias at cumque provident! Possimus exercitationem sapiente doloribus? Ab, impedit? Quas.
                </p>
            </div> <!--container-text-->
        </div> <!--container sobre-->
        
    </section> <!--sobre-->

    <section id="modalidades">
        <div class="container-modalidades">
            <div class="single-modalidades">
                <img src="img/mod_natacao_infantil.jpg" alt="">
                <h2>Categoria Adolescente</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In vel laudantium, repudiandae facilis est possimus quisquam tempore officia nihil, laboriosam quod, consectetur minus quae quia consequuntur aut reiciendis magni odio?</p>
                <p><i class="fas fa-swimmer"></i></p>

            </div> <!--single-modalidades-->

            <div class="single-modalidades">
                <img src="img/mod_adolescente.jpg" alt="">
                <h2>Categoria Adolescente</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In vel laudantium, repudiandae facilis est possimus quisquam tempore officia nihil, laboriosam quod, consectetur minus quae quia consequuntur aut reiciendis magni odio?</p>
                <p><i class="fas fa-swimmer"></i></p>

            </div> <!--single-modalidades-->

            <div class="single-modalidades">
                <img src="img/mod_adulto.jpg" alt="">
                <h2>Categoria Adulto</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In vel laudantium, repudiandae facilis est possimus quisquam tempore officia nihil, laboriosam quod, consectetur minus quae quia consequuntur aut reiciendis magni odio?</p>
                <p><i class="fas fa-swimmer"></i></p>

            </div> <!--single-modalidades-->

        </div> <!--container-modalidades-->
    </section> <!--modalidades-->

    <section id="inscricao">
        <div class="formulario">
                <?php
                    $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso']:" ";
                    if(!empty($mensagemDeSucesso)){
                        echo $mensagemDeSucesso;
                    }

                    $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro']:" ";
                    if(!empty($mensagemDeErro)){
                        echo $mensagemDeErro;
                    }
                ?>

            <form  action="dados.php" method="POST">
               
                <h2>Inscrição de Alunos</h2>
                <span>Nome:</span>
                <input type="text" name="nome" placeholder="Digite o nome...">
                <span>Idade:</span>
                <input type="text" name="idade" placeholder="Digite a idade...">


                <br><br>
                <input type="submit" value="Verificar Inscrição">
            </form>
        </div> <!--formulario-->
    </section> <!--inscricao-->

    <footer>
        
    </footer>


    <script src="https://kit.fontawesome.com/141727d426.js" crossorigin="anonymous"></script>
    <script src="js/config.js"></script>
</body>
</html>



