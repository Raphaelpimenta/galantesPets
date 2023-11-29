<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Home | DogShow</title> -->
    <title><?php bloginfo('name'); ?></title>
    <link rel="icon" href="./img/icones/cachorro-icon.png" type="image/svg+xml">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <!-- Inicio Wordpress Header -->
    <?php wp_head(); ?>
    <!-- Inicio Wordpress Header -->
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