<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_campos-do-usuario',
		'title' => 'Campos do usuário',
		'fields' => array (
			array (
				'key' => 'field_55ca363f068ef',
				'label' => 'Avatar',
				'name' => 'custom_avatar',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55a69be2ed09f',
				'label' => 'Idade',
				'name' => 'idade',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55a69bffed0a0',
				'label' => 'Polo',
				'name' => 'polo',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55a69c07ed0a1',
				'label' => 'Telefone',
				'name' => 'fone',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55ca36ac634be',
				'label' => 'No projeto você é:',
				'name' => 'user_type',
				'type' => 'radio',
				'choices' => array (
					'Mediador(a)' => 'Mediador(a)',
					'Jogador(a)' => 'Jogador(a)',
					'Educador(a)' => 'Educador(a)',
				),
				'other_choice' => 1,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_user',
					'operator' => '==',
					'value' => 'all',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

/* ODIN FIELDS */
$odin_theme_options = new Odin_Theme_Options(
    'odin-options', // Slug/ID da página (Obrigatório)
    __( 'Lista de Organizações', 'odin' ), // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'odin_register', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Configurações da página de registro', 'odin' ), // Título da aba.
        ),
    )
);
$odin_theme_options->set_fields(
    array(
        'register_section' => array(
            'tab'   => 'odin_register', // Sessão da aba odin_general
            'title' => __( 'Configurações da página de Registro', 'odin' ),
            'fields' => array(
                array(
                    'id' => 'polos',
                    'label' => __( 'Lista de Organizações', 'odin' ),
                    'type' => 'textarea',
                    'description' => __( 'Coloque separado por virgula', 'odin' )
                ),
            )
        ),
    )
);
