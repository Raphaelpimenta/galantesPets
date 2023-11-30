

<?php 
// Template Name: Contatos
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>