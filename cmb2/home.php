<?php 

add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home(){
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Home',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    //Introdução
    $cmb->add_field([
        'name' => 'Título Introdução',
        'id' => 'titulo_introducao',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo Introdução',
        'id' => 'subtitulo_introducao',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Botão Introdução',
        'id' => 'btn_introducao',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Imagem da Introdução',
        'id' => 'imagem_introducao',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);


}


//Serviços
add_action('cmb2_admin_init', 'cmb2_fields_home_servicos');

function cmb2_fields_home_servicos(){
    $cmb = new_cmb2_box([
        'id' => 'home_box2',
        'title' => 'Serviços',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    //Imagem 1
    $cmb->add_field([
        'name' => 'Imagem Serviço 1',
        'id' => 'img_servico1',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    //Título
    $cmb->add_field([
        'name' => 'Título do Serviço 1',
        'id' => 'titulo_servico1',
        'type' => 'text',
    ]);

    //Preço
    $cmb->add_field([
        'name' => 'Preço do serviço 1',
        'id' => 'preco_servico1',
        'type' => 'text',
    ]);

    //Imagem 2
    $cmb->add_field([
        'name' => 'Imagem Serviço 2',
        'id' => 'img_servico2',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    //Título
    $cmb->add_field([
        'name' => 'Título do Serviço 2',
        'id' => 'titulo_servico2',
        'type' => 'text',
    ]);

    //Preço
    $cmb->add_field([
        'name' => 'Preço do serviço 2',
        'id' => 'preco_servico2',
        'type' => 'text',
    ]);


    //Imagem 3
    $cmb->add_field([
        'name' => 'Imagem Serviço 3',
        'id' => 'img_servico3',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    //Título
    $cmb->add_field([
        'name' => 'Título do Serviço 3',
        'id' => 'titulo_servico3',
        'type' => 'text',
    ]);

    //Preço
    $cmb->add_field([
        'name' => 'Preço do serviço 3',
        'id' => 'preco_servico3',
        'type' => 'text',
    ]);
}

//Nosso Espaço
add_action('cmb2_admin_init', 'cmb2_fields_home_espacos');

function cmb2_fields_home_espacos(){
    $cmb = new_cmb2_box([
        'id' => 'home_box3',
        'title' => 'Nosso Espaço Pt-1',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Imagem 1',
        'id' => 'img_nosso_espaco1',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título 1',
        'id' => 'titulo_nosso_espaco1',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo 1',
        'id' => 'subtitulo_nosso_espaco1',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição 1',
        'id' => 'descricao_nosso_espaco1',
        'type' => 'textarea_small',
    ]);

}

//Nosso Espaço pt2
add_action('cmb2_admin_init', 'cmb2_fields_home_espacos2');

function cmb2_fields_home_espacos2(){
    $cmb = new_cmb2_box([
        'id' => 'home_box4',
        'title' => 'Nosso Espaço Pt-2',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Imagem 2',
        'id' => 'img_nosso_espaco2',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título 2',
        'id' => 'titulo_nosso_espaco2',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo 2',
        'id' => 'subtitulo_nosso_espaco2',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição 2',
        'id' => 'descricao_nosso_espaco2',
        'type' => 'textarea_small',
    ]);

}

//Nosso Espaço pt3
add_action('cmb2_admin_init', 'cmb2_fields_home_espacos3');

function cmb2_fields_home_espacos3(){
    $cmb = new_cmb2_box([
        'id' => 'home_box5',
        'title' => 'Nosso Espaço Pt-3',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Imagem 3',
        'id' => 'img_nosso_espaco3',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título 3',
        'id' => 'titulo_nosso_espaco3',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo 3',
        'id' => 'subtitulo_nosso_espaco3',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição 3',
        'id' => 'descricao_nosso_espaco3',
        'type' => 'textarea_small',
    ]);

}

add_action('cmb2_admin_init', 'cmb2_fields_depoimento');

function cmb2_fields_depoimento(){
    $cmb = new_cmb2_box([
        'id' => 'depoimento_home',
        'title' => 'Depoimento',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Imagem Depoimento',
        'id' => 'img_depoimento',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Texto do depoimento',
        'id' => 'text_depoimento',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Autor do depoimento',
        'id' => 'autor_depoimento',
        'type' => 'text',
    ]);
}


?>