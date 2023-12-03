<?php 

add_action('cmb2_admin_init', 'cmb2_fields_home', 'cmb2_fields_home_imagem');

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
        'name' => 'Imagem da Introdução',
        'id' => 'imagem_introducao',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

}


// function cmb2_fields_home_imagem(){
//     $cmb = new_cmb2_box([
//         'id' => 'home_box2',
//         'title' => 'Introdução Imagem',
//         'object_types' => ['page'],
//         'show_on' => [
//             'key' => 'page-template',
//             'value' => 'page-home.php',
//         ],
//     ]);

//     $cmb->add_field([
//         'name' => 'Imagem da Introdução',
//         'id' => 'imagem_introducao',
//         'type' => 'file',
//         'options' => [
//             'url' => false,
//         ],
//     ]);


// }



?>