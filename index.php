<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | DogShow</title>
    <link rel="icon" href="./img/icones/cachorro-icon.png" type="image/svg+xml">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>
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
    </header>

    <main class="introduçao-bg">
        <div class="introducao container">
            <div class="introducao-texto">
                <h1>A diversão começa na DogShow<span>.</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at aliquam vero, quod consectetur placeat incidunt suscipit cumque neque inventore.</p>
                <button class="btn-padrao">Escolha seu plano</button>
            </div>
            <picture>
                <source media="(max-width: 800px)" srcset="./img/fotos/intro-responsivo.jpg">
                <img src="./img/fotos/introducao.jpg" alt="Foto Cachorro">
            </picture>
        </div>
    </main>

    <article class="serviços">
        <h2 class="container">Serviços<span>.</span></h2>

        <ul>
            <li>
                <img src="./img/fotos/banho-tosa.jpg" alt="Banho e tosa">
                <h3>Banho e Tosa</h3>
                <span>R$ 39,00</span>
            </li>
            <li>
                <img src="./img/fotos/creche.jpg" alt="Creche">
                <h3>Creche</h3>
                <span>R$ 49,00</span>
            </li>
            <li>
                <img src="./img/fotos/hotel.jpg" alt="Hotel">
                <h3>Hotel</h3>
                <span>R$ 59,00</span>
            </li>
        </ul>
    </article>

    <div class="grid-bg">
        <section class="cards container">
            <h2>Nosso espaço<span>.</span></h2>
            <div class="grid-cards" id="cards">
                
                <ul class="grid-lista js-tabmenu">
                    <li>
                        <picture>
                            <source media="(max-width: 800px)" srcset="./img/fotos/parque.jpg">
                            <img src="./img/fotos/petPlay.jpg" class="ativado" alt="Parque para cachorro">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source media="(max-width: 800px)" srcset="./img/fotos/adestramento-pet.jpg">
                            <img src="./img/fotos/adestramento.jpg" alt="Adestramento canino">
                        </picture>
                    </li>
                    
                    <li>
                        <picture>
                            <source media="(max-width: 800px)" srcset="./img/fotos/passeio.jpg">
                            <img src="./img/fotos/passeador-cao.jpg" alt="Dog Walker">
                        </picture>
                    </li>
                </ul>
    
                <div class="grid-descriçao js-tabcontent">
                    <section>
                        <h3>Parque Pet</h3>
                        <span>Diversão garantida para cães</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repellat, magni, ipsum voluptate quia accusantium neque consequatur illo commodi iusto, error vitae itaque possimus quam. Praesentium dolorum assumenda fugit totam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ipsum deleniti neque, necessitatibus sed maiores ad repellendus nihil sapiente laudantium quia veritatis recusandae magni officiis unde minus iure non aliquam!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates.</p>
                        <button class="btn-padrao">Saiba mais</button>
                        
                    </section>
    
                    <section>
                        <h3>Adestramento Canino</h3>
                        <span>Cuidar do seu amigo faz bem para todos</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ipsum deleniti neque, necessitatibus sed maiores ad repellendus nihil sapiente laudantium quia veritatis recusandae magni officiis unde minus iure non aliquam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis id necessitatibus voluptas, nostrum deserunt harum similique iure.</p>
                        <button class="btn-padrao">Saiba mais</button>
                    </section>

                    <section>
                        <h3>Passeador de Cães</h3>
                        <span>Contrate um de nossos colaboradores para passear com seu amigo</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repellat, magni, ipsum voluptate quia accusantium neque consequatur illo commodi iusto, error vitae itaque possimus quam. Praesentium dolorum assumenda fugit totam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ipsum deleniti neque, necessitatibus sed maiores ad repellendus nihil sapiente laudantium quia veritatis recusandae magni officiis unde minus iure non aliquam!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates.</p>
                        <button class="btn-padrao">Saiba mais</button>
                        
                    </section>
    
                </div>
    
            </div>
        </section>
    </div>

    <section class="depoimento">
        <div>
            <img src="./img/fotos/depoimento.jpg" alt="Ana Júlia com cachorros">
        </div>
        <div class="depoimento-texto">
            <blockquote>
                <p>Estou absolutamente impressionada com o atendimento e cuidado que o petshop proporcionou ao meu querido cachorrinho. Sem dúvida, meu pet encontrou um lugar especial para ser mimado e bem cuidado. Recomendo fortemente!</p>
            </blockquote>
            <span>Ana Júlia</span>
        </div>
    </section>

    <article class="container">
        <div class="planos">
            <h2>Planos<span>.</span></h2>

            <div class="planos-item">
                <h3>Quinzenal</h3>
                <span>R$ 99,00</span>
                <ul class="plano-lista">
                    <li>Banho e Tosa</li>
                    <li>Creche</li>
                    <li>Dog Walker</li>
                    <li>Táxi Dog - 08h às 18h</li>
                </ul>
                <button class="btn-padrao">Inscreva-se</button>
            </div>

            <div class="planos-item">
                <h3>Mensal</h3>
                <span>R$ 199,00</span>
                <ul class="plano-lista">
                    <li>Banho e Tosa + creche</li>
                    <li>Táxi Dog 24h</li>
                    <li>Adestramento</li>
                    <li>Desconto em hotel</li>
                    <li>Desconto em clínicas ceterinárias</li>
                    <li>Duas consultas veterinária por mês</li>
                </ul>
                <button class="btn-padrao">Inscreva-se</button>
            </div>

        </div>
    </article>

    <footer class="footer-bg">
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
</html>