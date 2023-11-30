
    <?php 
    // Template Name: Planos
    ?>

<?php get_header(); ?>

    <div class="planos-bg">
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
    </div>

    <section class="vantagens-bg">
        <div class="vantagens container">
            <h2>Vantagens<span>.</span></h2>

            <ul>
                <li>
                    <img src="./img/icones/pet-shop.png" alt="Pet Shop">
                    <h3>Creche</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur perferendis sequi perspiciatis deserunt similique voluptates repudiandae et ad saepe.</p>
                </li>
                <li>
                    <img src="./img/icones/banho.png" alt="Banho">
                    <h3>Banho</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur perferendis sequi perspiciatis deserunt similique voluptates repudiandae et ad saepe.</p>
                </li>
                <li>
                    <img src="./img/icones/tosa.png" alt="Tosa">
                    <h3>Tosa</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur perferendis sequi perspiciatis deserunt similique voluptates repudiandae et ad saepe.</p>
                </li>
                <li>
                    <img src="./img/icones/veterinario.png" alt="Veterinário">
                    <h3>Clínica veterinária</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur perferendis sequi perspiciatis deserunt similique voluptates repudiandae et ad saepe.</p>
                </li>
                <li>
                    <img src="./img/icones/pet-food.png" alt="Produtos">
                    <h3>Desconto em produtos</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur perferendis sequi perspiciatis deserunt similique voluptates repudiandae et ad saepe.</p>
                </li>
                <li>
                    <img src="./img/icones/hotel.png" alt="hotel">
                    <h3>Hotelaria Pet</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis pariatur perferendis sequi perspiciatis deserunt similique voluptates repudiandae et ad saepe.</p>
                </li>
            </ul>
        </div>
    </section>

    <article class="perguntas container">
        <h2>Perguntas frenquentes<span>.</span></h2>

        <dl>
            <div>
                <dt><button aria-controls="pergunta1" aria-expanded="true">Qual forma de pagamento vocês aceitam?</button></dt>
                <dd id="pergunta1" class="ativa">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur harum cum, nemo temporibus incidunt magni porro obcaecati animi. Enim fugit commodi dolores amet, pariatur debitis.</dd>
            </div>
            <div>
                <dt><button aria-controls="pergunta2" aria-expanded="false">Como posso entrar em contato?</button></dt>
                <dd id="pergunta2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur harum cum, nemo temporibus incidunt magni porro obcaecati animi. Enim fugit commodi dolores amet, pariatur debitis.</dd>
            </div>
            <div>
                <dt><button aria-controls="pergunta3" aria-expanded="false">Vocês possuem algum desconto?</button></dt>
                <dd id="pergunta3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur harum cum, nemo temporibus incidunt magni porro obcaecati animi. Enim fugit commodi dolores amet, pariatur debitis.</dd>
            </div>
            <div>
                <dt><button aria-controls="pergunta4" aria-expanded="false">Como funciona a creche?</button></dt>
                <dd id="pergunta4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur harum cum, nemo temporibus incidunt magni porro obcaecati animi. Enim fugit commodi dolores amet, pariatur debitis.</dd>
            </div>
            <div>
                <dt><button aria-controls="pergunta5" aria-expanded="false">Meu pet estará seguro no hotel?</button></dt>
                <dd id="pergunta5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur harum cum, nemo temporibus incidunt magni porro obcaecati animi. Enim fugit commodi dolores amet, pariatur debitis.</dd>
            </div>
            <div>
                <dt><button aria-controls="pergunta6" aria-expanded="false">Como funciona o adestramento de cães?</button></dt>
                <dd id="pergunta6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur harum cum, nemo temporibus incidunt magni porro obcaecati animi. Enim fugit commodi dolores amet, pariatur debitis.</dd>
            </div>
        </dl>

    </article>


<?php get_footer(); ?>