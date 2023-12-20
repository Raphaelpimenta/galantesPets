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
        'title' => 'Nosso Espaço',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Imagem 1',
        'id' => 'img_nosso_espaco',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
        
    ]);



}



?>