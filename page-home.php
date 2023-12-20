
<?php 
// Template Name: Home
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <main class="introduçao-bg">
        <div class="introducao container">
            <div class="introducao-texto">
                <!-- <h1>A diversão começa na DogShow<span>.</span></h1> -->
                <h1><?php the_field('titulo_introducao'); ?><span>.</span></h1>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at aliquam vero, quod consectetur placeat incidunt suscipit cumque neque inventore.</p> -->
                <p><?php the_field('subtitulo_introducao'); ?></p>
                <button class="btn-padrao"><a href="/planos/"><?php the_field('btn_introducao');?></a></button>
            </div>
            <picture>
                <!-- <source media="(max-width: 800px)" srcset="./img/fotos/intro-responsivo.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fotos/introducao.jpg" alt="Foto Cachorro"> -->
                <img src="<?php the_field('imagem_introducao'); ?>" alt="Foto Cachorro"> 
            </picture>
        </div>
    </main>

    <article class="serviços">
        <h2 class="container">Serviços<span>.</span></h2>

        <ul>
                <li>
                    <img src="<?php the_field('img_servico1'); ?>" alt="Serviço">
                    <h3><?php the_field('titulo_servico1'); ?></h3>
                    <span><?php the_field('preco_servico1'); ?></span>
                </li>
                <li>
                    <img src="<?php the_field('img_servico2'); ?>" alt="Serviço">
                    <h3><?php the_field('titulo_servico2'); ?></h3>
                    <span><?php the_field('preco_servico2'); ?></span>
                </li>
                <li>
                    <img src="<?php the_field('img_servico3'); ?>" alt="Serviço">
                    <h3><?php the_field('titulo_servico3'); ?></h3>
                    <span><?php the_field('preco_servico3'); ?></span>
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
                            <!-- <img src="./img/fotos/petPlay.jpg" class="ativado" alt="Parque para cachorro"> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fotos/petPlay.jpg" class="ativado" alt="Parque para cachorro">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source media="(max-width: 800px)" srcset="./img/fotos/adestramento-pet.jpg">
                            <!-- <img src="./img/fotos/adestramento.jpg" alt="Adestramento canino"> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fotos/adestramento.jpg" alt="Adestramento canino">
                        </picture>
                    </li>
                    
                    <li>
                        <picture>
                            <source media="(max-width: 800px)" srcset="./img/fotos/passeio.jpg">
                            <!-- <img src="./img/fotos/passeador-cao.jpg" alt="Dog Walker"> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fotos/passeador-cao.jpg" alt="Dog Walker">
                        </picture>
                    </li>
                </ul>
    
                <div class="grid-descriçao js-tabcontent">
                    <section>
                        <!-- <h3>Parque Pet</h3> -->
                        <h3><?php the_field('titulo_nosso_espaco1'); ?></h3>
                        <span><?php the_field('subtitulo_nosso_espaco1'); ?></span>
                        <p><?php the_field('descricao_nosso_espaco1'); ?></p>
                        <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque repellat, magni, ipsum voluptate quia accusantium neque consequatur illo commodi iusto, error vitae itaque possimus quam. Praesentium dolorum assumenda fugit totam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ipsum deleniti neque, necessitatibus sed maiores ad repellendus nihil sapiente laudantium quia veritatis recusandae magni officiis unde minus iure non aliquam!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium fugiat numquam ut minima vero natus cum praesentium! Modi recusandae doloremque quae ea minus blanditiis delectus pariatur autem ullam voluptates.</p> -->
                        
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

    <?php endwhile; else: endif; ?>   

<?php get_footer(); ?>