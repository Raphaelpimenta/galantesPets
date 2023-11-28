<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos | DogShow</title>
    <link rel="icon" href="./img/icones/cachorro-icon.png" type="image/svg+xml">
    <link rel="stylesheet" href="style.css">
</head>
<body id="contato">

    <header class="header-bg">
        <div class="header container">
            <a href="./index.html" class="logo">
                <img src="./img/icones/logo.png" alt="Logo">
                <p>DogShow</p>
            </a>

            <nav class="js-menu">
                <div>
                    <button id="btn-mobile"><span id="hamburguer"></span></button>
                    <ul class="header-menu">
                        <li><a href="./index.html">Início</a></li>
                        <li><a href="./planos.html">Planos</a></li>
                        <li><a href="./contatos.html">Contatos</a></li>
                    </ul>
                </div>
            </nav>

        </div>
    </header> -->

    <?php 
    // Template Name: Contatos
    ?>

<?php get_header(); ?>

    <main class="forms">
        <div class="titulo-bg">
            <div class="titulo container">
                <p>Respostas em até 24h</p>
                <h1>Nosso contato<span>.</span></h1>
            </div>
        </div>

        <div class="contato container">
            <section class="contato-dados" aria-label="Endereço">
                <h2>Loja Online</h2>
                <div class="contato-endereco">
                    <p>Rua Ali Perto, 35</p>
                    <p>São Paulo - SP</p>
                    <p>Brasil - Terra - Via Láctea</p>
                </div>
                <address class="contato-meios">
                    <a href="mailto:contato@dogshow.com">contato@dogshow.com</a>
                    <a href="mailto:faleconosco@dogshow.com">assistencia@dogshow.com</a>
                    <a href="tel:+551199999999">+55 11 1234-5678</a>
                </address>
                <div class="contato-redes">
                    <a href="./">
                        <img src="./img/icones/instagram.png" alt="Instagram">
                    </a>
                    <a href="./">
                        <img src="./img/icones/facebook.png" alt="Facebook">
                    </a>
                    <a href="./">
                        <img src="./img/icones/google.png" alt="Google">
                    </a>
                </div> 
            </section>

            <section class="contato-formulario" aria-label="Formulário">
                <form class="form" action="./contato.html">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Seu nome">  
                    </div>
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" placeholder="(11) 9999-9999">  
                    </div>
                    <div class="col-2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="contato@email.com">  
                    </div>
                    <div class="col-2">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="5" placeholder="O que você precisa?"></textarea>
                        
                    </div>
                    <button class="btn-padrao col-2">Enviar Mensagem</button>
                </form>
            </section>
        </div>
    </main>

    <section class="container">
        <h2 class="titulo-loja">Loja Física</h2>
        <div class="loja-fisica">
            <div class="mapa">
                <img src="./img/fotos/mapa.png" alt="Mapa">
            </div>
            <ul class="dados">
                <li><a href="mailto:contato@dogshow.com">contato@dogshow.com</a></li>
                <li><a href="tel:+551199999999">+55 11 1234-5678</a></li>
                <li>Av. Paulista, 1000 - Bela Vista</li>
                <li>São Paulo - SP</li>
                <li data-semana="1,2,3,4,5" data-horario="8,18">Seg à Sex - 08h às 18h</li>
            </ul>
        </div>
    </section>

    <!-- <footer class="footer-bg">
        <div class="footer container">
            <h2>Contatos<span>.</span></h2>
            <div class="footer-texto">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quaerat pariatur recusandae, explicabo veniam repellat dolore eos incidunt, doloremque debitis consequuntur inventore nostrum aliquam reprehenderit.</p>
            </div>
            <div class="footer-lista">
                

                <nav>
                    <ul>
                        <li class="titulo-footer">Fale Conosco</li>
                        <li><a href="#">+55 11 1234-5678</a></li>
                        <li><a href="#">contato@dogshow.com</a></li>
                        <li><a href="#">Rua Ali Perto, 45</a></li>
                        <li><a href="#">São Paulo - SP</a></li>
                    </ul>
                </nav>

                <nav>
                    <ul>
                        <li class="titulo-footer">Informações</li>
                        <li><a href="#">Politica</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Equipe</a></li>
                        <li><a href="#">Termos e Condições</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container rodape">
            <div class="icones">
                <img src="./img/icones/facebook.png" alt="Ícone">
                <img src="./img/icones/google.png" alt="Ícone">
                <img src="./img/icones/instagram.png" alt="Ícone">
            </div>
            <p>© 2023 DogShow. Alguns direitos reservados.</p>
        </div>
    </footer>
    
    <script type="module" src="./js/script.js"></script>
</body>
</html> -->

<?php get_footer(); ?>